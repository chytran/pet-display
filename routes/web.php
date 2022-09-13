<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PetController;

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

Route::get('signup',[SignupController::class, 'get']);
Route::post('signup',[SignupController::class, 'index']);

Route::get('logout',[logoutController::class, 'index']);


// Route::get('/user', function () {
//     return view('user');
// });

Route::get('user', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'post']);

Route::get("login", [LoginController::class, 'index'])->name('login');
Route::post("login", [LoginController::class, 'login']);

Route::view("/denied", 'denied');

Route::group(["middleware" => "mygroup"], function(){
    Route::view("/admin", 'admin');
    Route::view("/profile", 'profile');
});

Route::get('addcustomer', [CustomerController::class, 'add']);
Route::post('addcustomer', [CustomerController::class, 'addcustomer']);

Route::get("deletecustomer/{id}", [CustomerController::class, 'deletecustomer']);
Route::get("editcustomer/{id}", [CustomerController::class, 'editcustomer']);

Route::get('petDisplay', [PetController::class, 'list']);

Route::get('listcustomer', [CustomerController::class, 'list']);
Route::post('updatecustomer', [CustomerController::class, 'updatecustomer']);

Route::get('addpet', [PetController::class, 'displayAddPet']);
Route::post('addpet', [PetController::class, 'addPet']);
