<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\StudentEvaluationAnswerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json(['ok' => true]);
});
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');


Route::middleware('guest')->group(function () {
    Route::post('/register', [AuthController::class, "register"]);
    Route::post('/login', [AuthController::class, "login"]);

    Route::post('/forgot-password', [AuthController::class, "forgot"]);     
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetEmail']);   
    Route::post('/reset-password/{token}', [AuthController::class, "reset"]);    
});

Route::post('/logout', [AuthController::class, "logout"]);


Route::get('/evaluations', [EvaluationController::class, 'index']);      // listă

Route::get('/topics', [TopicController::class, 'index']);      // listă

Route::get('/topics/{id}', [TopicController::class, 'show']);

Route::get('/evaluations/{id}', [EvaluationController::class, 'show']);

Route::get('/evaluations/{id}/tree/{studentId}', [EvaluationController::class, 'tree']);

Route::post('/student-evaluation-answers/bulk', [StudentEvaluationAnswerController::class, 'storeBulk']
);