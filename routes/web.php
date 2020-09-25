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


Route::get('users/{id}', function($id){
  return $id;
})->where('id', '[0-9]+');


Route::get('login/{username}', function($username){
  return $username;
})->where('username', '[A-Za-z]+');

Route::get('posts/{id}/{slug}', function($id, $slug){
 $mix = $id . $slug;
 return $mix;
})->where(['id'=> '[0-9]+', 'slug'=>'[A-Za-z]+']);


//The only thing that defines which route parameter matches with 
//method parameter is their order(left to right), as you can see here:
Route::get('users/{userId}/comments/{commentId}', function(
  $thisIsActuallyTheUserId,
  $thisIsReallyTheCommentId
){


  $mix = $thisIsActuallyTheUserId . $thisIsReallyTheCommentId;
  return $mix;
  
});