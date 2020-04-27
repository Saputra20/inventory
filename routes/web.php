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
Route::group(['prefix' => '/' , 'middleware' => 'guest'], function () {
    Route::get('/' , 'LoginController@index');
    Route::post('login' , 'LoginController@login');
    Route::get('/forgot-password' , 'LoginController@reset');
});

Route::group(['prefix' => '/' , 'middleware' => 'check' ], function () {
    // Route::get('/', function () {
    //     return view('item.index');
    //     // return view('welcome');
    // });
    Route::get('/dashboard', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::resource('items', 'ItemController');
    Route::resource('category-items', 'CategoryItemController');
    Route::get('error-page' , function(){
        return view('error.offline');
    });
});
