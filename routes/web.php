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
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/seller', 'PagesController@sdashboard');
Route::get('/buyer', 'PagesController@bdashboard');
Route::get('/help', 'PagesController@help');
Route::get('/search', 'PagesController@search');
Route::get('/seller/addproperty', 'PagesController@addproperty');
Route::resource('properties','AddsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('welcome')->withDetails($user)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});
