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


// Closure
Route::get('porfil', function(){
    return 'ini adalah profil siswa';
})->name('profil');

// Router Name
Route::get('/tesname', function(){
    return route('profil');
});

//Parameter
Route::get('profil/{id}', function($id){
    return $id;
});

// Controller
Route::get('tescontroller', 'TesController@index');

// Resource
Route::resource('siswa', 'SiswaController');

// blade 
Route::get('/', 'LandingController@index');
Route::get('/about', 'LandingController@about');

Route::get('/data', 'SiswaController@index')->name('data');
Route::post('/data', 'SiswaController@store');