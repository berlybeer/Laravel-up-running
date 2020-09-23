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

Route::get('create-greeting', function(){
  $greeting = new Greeting;
  $greeting->body = 'Hello, world';
  $greeting->save();
});

Route::get('first-greeting', function(){
  return Greeting::first()->body;
});

Route::get('/bugsnag', 'WelcomeController@index');