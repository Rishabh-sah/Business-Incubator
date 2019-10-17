<?php
use Illuminate\Support\Facades\Input;
use App\Add;
//use DB;
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
Route::get('/searchproperty', 'PagesController@searchproperty');
Route::resource('search', 'SearchsController');
Route::get('/seller/addproperty', 'PagesController@addproperty');
Route::resource('properties','AddsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','PagesController@about');
Route::any('/srch',function(){
    $Address = Input::get ( 'q' );
    return view('searchs.index')->with('Address',$Address);
});
