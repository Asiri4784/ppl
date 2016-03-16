<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [
	'as'=>'login',
	'uses'=>'Auth\AuthController@getlogin'
	]);
Route::post('/login', [
	'as'=>'postlogin',
	'uses'=>'Auth\AuthController@postLogin'
	]);
Route::get('/logout', [
	'as'=>'logout',
	'uses'=>'Auth\AuthController@getLogout'
	]);
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', [
	'as'=>'dashboard',
	'uses'=>'Auth\AuthController@getDashboard'
	]);
});
/**Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

