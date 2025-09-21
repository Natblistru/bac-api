<?php

namespace App\Http\Controllers\API;

use Throwable;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:users,email',
            'role' => 'required|string|in:student,teacher',
            'password' => 'required|min:8',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'validation_errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $user = User::create([
                'name' => "{$request->first_name} {$request->last_name}",
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);

            if ($request->role === 'student') {
                Student::create([
                    'name' => "{$request->first_name} {$request->last_name}",
                    'user_id' => $user->id,
                    'status' => 0,
                ]);
            }

            $token = $user->createToken($user->email.'_Token')->plainTextToken;

            return response()->json([
                'status'=>201,
                'username'=>$user->name,
                'token'=>$token,
                'message'=>'Registered Successfully',
            ]);
        }
    }

    public function login(Request $request) {
        $validator =  Validator::make($request->all(), [
            'email' => 'required|max:191',
            'password' => 'required',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'validation_errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $user = User::where('email', $request->email)->first();
 
            if (! $user || ! Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status'=>401,
                    'message'=>'Invalid Credentials',
                ]);
            }
            else
            {
                if($user->role_as == 1) //1=Admin
                {
                    $role = 'admin';
                    $token = $user->createToken($user->email.'_AdminToken', ['server:admin'])->plainTextToken;
                }
                else
                {
                    $role = '';
                    $token = $user->createToken($user->email.'_Token', [''])->plainTextToken;
                }


                $student = Student::where('user_id', $user->id)->first();
                if ($student) {
                    $roleId = $student->id;
                    $role = 'student';
                }


                return response()->json([
                    'status'=>200,
                    'user' => $user,
                    'username'=>$user->name,
                    'roleId'=>$roleId,
                    'token'=>$token,
                    'message'=>'Login Successfully',
                    'role'=>$role,
                ]);
            }
        }
    }

    public function logout()
    {
        // auth()->user()->tokens()->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Logged Out Successfully',
        ]);
    }

    public function me(Request $r)
    {
        return response()->json($r->user());
    }

    public function forgot(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }

        $user = User::where('email', $request->input('email'))->first();

        if (!$user || !$user->email) {
            return response()->json([
                'status'  => 404,
                'message' => 'Incorrect Email Address Provided',
            ], 404);
        }

        // token unic, suficient de lung
        $user->remember_token = Str::random(30);
        $user->save();

        Mail::to($user->email)->send(new ForgotPasswordMail($user));

        return response()->json([
            'status'  => 200,
            'message' => 'A reset link has been sent to your email address.',
        ]);
    }

    public function reset(string $token, Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|confirmed', // folosește și password_confirmation
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }

        $user = User::where('remember_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'The token is not valid'], 404);
        }

        $user->password = Hash::make($request->password);
        // invalidează tokenul ca să fie one-time
        $user->remember_token = null;
        $user->save();

        // Dacă folosești Sanctum și vrei să deconectezi sesiunile vechi:
        try { $user->tokens()->delete(); } catch (Throwable $e) {}

        return response()->json([
            'status'  => 200,
            'message' => 'Password reset successfully',
        ]);
    }

    public function showResetEmail(string $token): JsonResponse
    {
        $user = User::where('remember_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid token'], 404);
        }

        return response()->json(['email' => $user->email], 200);
    }

}
