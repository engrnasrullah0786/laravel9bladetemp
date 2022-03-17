<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PassportAuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\CodeCheckController;
use App\Http\Controllers\Api\ResetPasswordController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
Route::post('resetPassword', [PassportAuthController::class, 'resetPassword']);

Route::post('password/email',  ForgotPasswordController::class);
Route::post('password/code/check', CodeCheckController::class);
Route::post('password/reset', ResetPasswordController::class);


Route::middleware('auth:api')->group(function () {
    Route::post('/addPost', [PostController::class,'addPost']);
    Route::post('/updatePost', [PostController::class,'updatePost']);
    Route::post('/deletePost', [PostController::class,'deletePost']);
    Route::get('/getPosts', [PostController::class,'getPosts']);
});
// Route::middleware('auth:api')->group(function () {
//     Route::resource('posts', PostController::class);
// });
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
