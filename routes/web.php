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







Route::middleware('auth:api', 'throttle:3,1')->group(function(){
  Route::get('/tries', function(){
    echo "Only 3 times";
  });
});


// Route::middleware('throttle:3,1')->group(function(){
//   Route::get('/index', 'DashboardController@index');

//   Route::get('/editusers', 'DashboardController@editUsers');
// });


// Route::prefix('dashboard')->group(function(){
//   Route::get('/', function(){
//     echo "We are in the /dashboard path";
//   });
//   Route::get('users', function(){
//     echo "We are in the /dashboard/users";
//   });
// });

//catch all unmatched paths:

Route::fallback(function(){
  echo "This is a unmatched path";
});





//Parameterized subdomain routing

Route::namespace('Customers')->group(function(){
  Route::prefix('backend')->namespace('BackEnd')->group(function(){
    Route::get('customers', 'Customer@index');
  });

  Route::prefix('frontend')->namespace('FrontEnd')->group(function(){
    Route::get('customers','Customer@index');
  });
});

//Dashboard routes

// Route::group([
//   'namespace' => 'Dashboard',
//   'prefix' => 'dashboard'
// ],function(){
//   Route::get('/index', 'DashboardController@index');
//   Route::get('/editusers', 'DashboardController@editUsers');
// });


Route::namespace('Dashboard')->group(function(){
  Route::prefix('dashboard')->group(function(){
    Route::get('/index', 'DashboardController@index');
    Route::get('/editusers', 'DashboardController@editUsers');
  });
});