<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'SiteController@index']);

Route::get('/register', ['as' => 'reg', 'uses' => 'SiteController@register']);

Route::get('/about', ['as' => 'about', 'uses' => 'SiteController@about']);

Route::get('/past_contests', ['as' => 'past', 'uses' => 'SiteController@history']);

Route::get('/contact_info', ['as' => 'contact', 'uses' => 'SiteController@contact']);

Route::post('payment',['as' => 'payment', 'uses' =>  'RegisterController@getPaymentID']);

Route::post('teamRegister', ['as' => 'teamReg', 'uses' => 'RegisterController@register']);

Route::post('store', ['as' => 'store', 'uses' => 'RegisterController@store']);

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

Route::group(['middleware' => ['web']], function () {


});
