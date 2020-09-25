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

Route::get('/hello', function(){
  return "Hello World";
});

//This is not actually a static method per se,
//but rather service location using Laravel's facades

//If you prefer to avoid facades,
//you can accomplish these same definitions like this:

$router->get('/bye', function(){
  return 'bye bye bye..';
});

Route::get('/', function(){
  return view('welcome');
});

Route::get('about', function(){
  return view('about');
});

Route::get('products', function(){
  return view('products');
});

Route::get('services', function(){
  return view('services');
});

