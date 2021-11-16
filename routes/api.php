<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\RotcmemberController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UsersController::class, 'login']);
Route::post('register', [UsersController::class, 'register']);
Route::post('reset-password',[UsersController::class,'resetPassword']);

//POSTS

route::get('get-all-rotcmember',[RotcmemberController::class,'getallRotcmember']);
route::get('get-rotcmember',[RotcmemberController::class,'getRotcmember']);
route::get('search-rotcmember',[RotcmemberController::class,'searchRotcmember']);