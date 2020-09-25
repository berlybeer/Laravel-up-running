<?php


use App\Greeting;
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

Route::get('/', function(){
  return view('welcome');
});

Route::get('/welcome', "WelcomeController@index");


Route::get('/helper', "WelcomeController@helper");

//Defining a route with name() in routes/web.php
Route::get('members/{id}','MemberController@show')->name('members.show');


