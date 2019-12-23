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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/guest', 'HomeController@index');

Route::group(['middleware'=>'admin'],function(){
   Route::resources([
    'admin' => 'AdminController',
    'services'=>'AdminServiceController',
    'user'=>'AdminUserController'
	]);
   Route::get('/messages/{id}','AdminServiceController@getAllUsers');
   Route::post('/mssg','AdminServiceController@send_message');
});

Route::group(['middleware'=>'user'],function(){
   Route::resources([
    'guest' => 'GuestController'
	]);
});




