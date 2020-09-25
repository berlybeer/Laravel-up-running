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


Route::get('/', "WelcomeController@index");


Route::get('users/{id}/friends', function($id){
  return $id;
});


//You should also provide a default value for the route's corresponding variable
Route::get('users/{id?}', function($id = 'fallbackId'){
 return $id;
});