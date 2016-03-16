<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.

*/
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;
Route::get('/login', [
	'as'=>'login',
	'uses'=>'Auth\AuthController@getlogin'
	]);
Route::post('/login', [
	'as'=>'postlogin',
	'uses'=>'Auth\AuthController@postLogin'
	]);\
	
Route::get('/admin', function () {
	return view('admin.index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
// Route::group(['middleware' => 'auth'], function()
// {
// 	Route::get('/admin', [
// 		'as'=>'admin',
// 		'uses'=>'Auth\AuthController@getProfile'
// 		]);
// });
