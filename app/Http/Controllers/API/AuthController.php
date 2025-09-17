<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

}
