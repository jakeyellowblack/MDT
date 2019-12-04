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

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/category/{category}/register', 'RegisterController@index');
Route::get('/country/{country}/register', 'RegisterController@index');

Route::get('auth/success', [
    'as'   => 'auth.success',
    'uses' => 'Auth\AuthController@success'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
