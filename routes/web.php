<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('actu','actualityController');
Route::get('/allActus','actualityController@all')->name('indexall');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{user}','UserController@show')->name('user.show');
Route::get('/user/{user}/edit','UserController@edit')->name('user.edit');
Route::put('/user/{user}','UserController@update')->name('user.update');


Route::resource('filiere','FiliereController')->only(['show','index']);

Route::resource('absence','AbsenceController');
