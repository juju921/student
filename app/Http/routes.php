<?php

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

Route::get('/', 'WelcomeController@index');

/*Route::get('student/{name}', 'WelcomeController@student');
Route::get('promo', 'WelcomeController@promo');*/


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'FrontController@index');
Route::get('single/{id}', 'FrontController@showSingle');
Route::get('category/{id}', 'FrontController@showCategory');
Route::get('tag/{id}', 'FrontController@showTag');



route::get('dashboard/index', 'DashboardController@index');
Route::resource('student', 'StudentController');
Route::resource('posts', 'PostController');



//Route::get('test2', function());
/*Route::get('test', function({
   return App/Student::current->get();
});*/

