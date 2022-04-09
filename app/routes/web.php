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
    return view('admin.dashbord');
}); 

Auth::routes();
;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nedra', function () {
    return view('admin.formulaire');
}); 

    


//Route::get('/create','App\Http\Controllers\TestController@create')->name('create');
//Route::post('/store','App\Http\Controllers\TestController@store')->name('store');

///salle


//Route::post('/create','App\Http\Controllers\SalleController@store')->name('create');
///space
//Route::resource('Spaces','SpaceController ');
Route::get('/create','App\Http\Controllers\SpaceController@create')->name('create');
Route::post('/store','App\Http\Controllers\SpaceController@store')->name('store');
Route::get('/index','App\Http\Controllers\SpaceController@index')->name('index');
Route::Post('/update/{id}','App\Http\Controllers\SpaceController@update')->name('update');
Route::get('/edit/{space_id}','App\Http\Controllers\SpaceController@edit')->name('edit');
Route::get('/destroy/{id}','App\Http\Controllers\SpaceController@destroy')->name('destroy');
//////////////
//Route::get('/create','App\Http\Controllers\EventController@create')->name('create');
//Route::get('/addcar','App\Http\Controllers\CarApiController@addcar')->name('addcar');
//Route::post('/Sposts','App\Http\Controllers\CarApiController@posts')->name('posts');
Route::get('/affiche','App\Http\Controllers\PostController@affiche')->name('affiche');
Route::get('/insertion','App\Http\Controllers\PostController@insertion')->name('insertion');
