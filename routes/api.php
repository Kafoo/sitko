<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Route::post('posts', [PostController::class, 'store']);

Route::get('posts', [PostController::class, 'get']);

Route::get('users', [UserController::class, 'index']);

Route::get('categories', [CategoryController::class, 'index']);

Route::delete('posts/{id}', [PostController::class, 'delete']);


Route::resource('/task', 'TaskController');
Route::get('/category/{category}/tasks', 'CategoryController@tasks');
Route::resource('/category', 'CategoryController');