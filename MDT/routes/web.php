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

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/category/{category}/register', 'RegisterController@index');
Route::get('/country/{country}/register', 'RegisterController@index');

Route::get('/my-profile', function () {
	return view('Layout/my-profile');
});

Route::get('auth/success', [
    'as'   => 'auth.success',
    'uses' => 'Auth\AuthController@success'
]);

Auth::routes();


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

Route::get('/home', 'HomeController@index')->name('home');

});