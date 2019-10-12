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
Route::get('/available', 'PagesController@available');
Route::get('/seller/addproperty', 'PagesController@addproperty');
Route::resource('properties','AddsController');
Route::resource('available','SearchesController');
Route::get('/reg/{id}', function ($id) {
    return 'This is user '.$id;
});
