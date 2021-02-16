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

// login authentication
Route::get('siswa/login', 'SiswaController@login');
Route::post('siswa/login', 'SiswaController@auth');

// Resource
Route::group(['middleware' => 'auth'] , function (){
    Route::resource('siswa', 'SiswaController');
    
    // insert data
    Route::get('/insert', 'SiswaController@create')->name('insert');
    Route::post('/insert', 'SiswaController@store');
    // logout
    Route::get('logout', 'SiswaController@logout');
});

// blade 
Route::get('/', 'LandingController@index');
Route::get('/about', 'LandingController@about');

