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

Route::get('/auth/login','AdminController@getLogin');
Route::post('/auth/login','AdminController@postLogin');
Route::get('/login','AdminController@getLogin');
Route::get('/logout' , 'AdminController@getLogout');
Route::get('/active' , 'frontendController@getActive');

Route::get('/register','frontendController@getRegister');
Route::post('/regis','frontendController@postRegister');

Route::get('/active/{token}/{id}','AdminController@activeaccount');

Route::group(['middleware'=>'auth'], function(){
	
	Route::group(['prefix'=>'/admin'], function()
	{
		Route::get('/','adminController@getIndex');
		Route::resource('/users', 'UserController');
		Route::post('/users/updateAvatar/{id}', 'UserControler@updateAvatar');
		Route::resource('/books','BookController');

	});

});
