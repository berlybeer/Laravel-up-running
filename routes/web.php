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

Route::get('users/{userId}/comments/{commentId}', function($userId, $commentId){
  $mix = "users/" . $userId . "/comments/" . $commentId;
  return $mix;
})->name('users.comments.show');


Route::group([], function () {
  Route::get('hello', function () {
      return 'Hello';
  });
  Route::get('world', function () {
      return 'World';
  });
});

Route::get('login', function(){
  return "You need to login";
})->name('login');


Route::middleware('auth')->group(function(){
  Route::get('dashboard', function(){
    return view('dashboard');
  });
  Route::get('account', function(){
    return view('account');
  });
});



