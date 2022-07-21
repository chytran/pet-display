<?php

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

Route::get('/', function () {
    $array['name1'] = "j";
    $array['name2'] = "k";
    $array['name3'] = "l";

    $array2['names'] = $array;
    return view('welcome', $array2);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}/{type}', function ($id, $type) {
    $arr['id'] = $id;
    $arr['type'] = $type;
    return view('user', $arr);
});

