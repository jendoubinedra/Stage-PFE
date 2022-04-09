<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/services', 'ServicesController');
 Route::get('/addservices', 'ServicesController@create')->name('addservices'); 
 Route::get('/indexservices', 'ServicesController@index')->name('indexservices'); 
 Route::resource('/categories', 'CategoriesController');
 Route::get('/bar', 'TestController@bar');
 //Route::get('/create','CategoriesController@create')->name('create');
 //Route::delete('')



