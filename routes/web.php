<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/hello/{name}/{age}', [HomeController::class, 'hello']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);



Route::get('/User', [UserController::class, 'index']);
Route::get('/User/create', [UserController::class, 'create']);
Route::post('/User/store', [UserController::class, 'store']);
Route::get('/User/edit/{id}', [UserController::class, 'edit']);
Route::post('/User/update/{id}', [UserController::class, 'update']);
Route::get('/User/delete/{id}', [UserController::class, 'delete']);

Route::get('/Post', [PostController::class, 'index']);
Route::get('/Post/create', [PostController::class, 'create']);
Route::post('/Post/store', [PostController::class, 'store']);
Route::get('/Post/edit/{id}', [PostController::class, 'edit']);
Route::post('/Post/update/{id}', [PostController::class, 'update']);
Route::get('/Post/delete/{id}', [PostController::class, 'delete']);

Route::get('/Auth/login', [AuthController::class, 'login'])->name("login");
Route::post('/Auth/doLogin', [AuthController::class, 'doLogin']);
Route::get('/Auth/register', [AuthController::class, 'register']);
Route::post('/Auth/doRegister', [AuthController::class, 'doRegister']);
Route::get('/Auth/logout', [AuthController::class, 'logout']);
