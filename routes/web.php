<?php

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


use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');

});

\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group (function(){
    Route::get('admin', function(){
        ('Auth\LoginController@showLoginForm')->name('admin');
    });

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});



