<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\logoutController;

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

Route::get("/", function() {
    // session()->put("LOGGED_IN", true);
    return view("welcome");
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}',[UserController::class, 'index']);

Route::get('signup',[SignupController::class, 'index']);
Route::post('signup',[SignupController::class, 'index']);

Route::get('logout',[logoutController::class, 'index']);


// Route::get('/user', function () {
//     return view('user');
// });

Route::get('user', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'post']);

Route::get("/login", function(){
    return view('login');
});

Route::view("/denied", 'denied');

Route::group(["middleware" => "mygroup"], function(){
    Route::view("/admin", 'admin');
    Route::view("/profile", 'profile');
});
