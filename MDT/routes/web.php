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


Route::get('complete', function () {
	return view('complete');
});

Route::get('account_setting', function () {
	return view('account_setting');
});

Route::get('about', function () {
	return view('about');
});

Route::post('/complete','FreelancerController@store')->name('complete.store');
Route::get('/complete','FreelancerController@index')->name('complete.index');
Route::get('/complete','FreelancerController@create')->name('complete.create');

Route::put('/complete', 'RegisterController@register')->name('complete');
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/category/{category}/register', 'RegisterController@index');
Route::get('/country/{country}/register', 'RegisterController@index');

Route::get('/my-profile', function () {
	return view('Layout/my-profile');
});

Route::get('/', function () {
	return view('/');
});

Route::post('/home','JobController@store')->name('job.store');
Route::get('/my-profile','JobController@index')->name('job.index');
Route::get('/home','JobController@create')->name('job.create');
Route::delete('/home/{id}','JobController@destroy')->name('job.destroy');


Route::get('auth/success', [
    'as'   => 'auth.success',
    'uses' => 'Auth\AuthController@success'
]);

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{user_id}/approve', 'UserController@approve')->name('users.approve');
Route::get('/users/{user_id}/disapprove', 'UserController@disapprove')->name('users.disapprove');

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
});