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
// get post pathput path delete options head
// view,redirect ,any,match, middleware,group
Route::get('/hello', function () {
   return ('welcome To Laravel 6');
 });
// // Route with parameter
// Route::get('/{id}', function ($id) {
//     return "Welcome".$id;
// });

// Optional Route with Dynamic parameter
// Route::get('welcome/{id?}', function ($id="Guest") {
//     return "Welcome".$id;
// });

// redirect route method
// Route::redirect('/', 'hello', 302);
Route::view('/', 'welcome',['name'=>'Sujan Gaha Magar']);
Route::resource('post', 'PostController');
Route::resource('profile', 'UserProfileController');