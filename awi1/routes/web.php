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




Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');



//classes
Route::get('/classes', 'App\Http\Controllers\ClasseController@classes')->name('classes');
Route::get('/classe/{id}', 'App\Http\Controllers\ClasseController@classe')->name('classe');

Route::get('/addClasse', 'App\Http\Controllers\ClasseController@addClasse')
		->name('addClasse');
		
Route::Post('/addClassePost', 'App\Http\Controllers\ClasseController@addClassePost')
		->name('addClassePost');

Route::get('/editClasse/{id}', 'App\Http\Controllers\ClasseController@editClasse')
		->name('editClasse');
Route::Post('/editClassePost', 'App\Http\Controllers\ClasseController@editClassePost')
		->name('editClassePost');

Route::get('/deleteClasse/{id}', 'App\Http\Controllers\ClasseController@deleteClasse')
		->name('deleteClasse');
Route::Post('/deleteClassePost', 'App\Http\Controllers\ClasseController@deleteClassePost')
		->name('deleteClassePost');


//etudiants
Route::get('/etudiants', 'App\Http\Controllers\EtudiantController@etudiants')->name('etudiants');
Route::get('/etudiant/{id}', 'App\Http\Controllers\EtudiantController@etudiant')->name('etudiant');

Route::get('/addEtudiant', 'App\Http\Controllers\EtudiantController@addEtudiant')
		->name('addEtudiant');
Route::Post('/addEtudiantPost', 'App\Http\Controllers\EtudiantController@addEtudiantPost')
		->name('addEtudiantPost');

Route::get('/editEtudiant/{id}', 'App\Http\Controllers\EtudiantController@editEtudiant')
		->name('editEtudiant');
Route::Post('/editEtudiantPost', 'App\Http\Controllers\EtudiantController@editEtudiantPost')
		->name('editEtudiantPost');

Route::get('/deleteEtudiant/{id}', 'App\Http\Controllers\EtudiantController@deleteEtudiant')
		->name('deleteEtudiant');
Route::Post('/deleteEtudiantPost', 'App\Http\Controllers\EtudiantController@deleteEtudiantPost')
		->name('deleteEtudiantPost');

Route::Post('/searchEtudiantPost', 'App\Http\Controllers\EtudiantController@searchEtudiantPost')
		->name('searchEtudiantPost');