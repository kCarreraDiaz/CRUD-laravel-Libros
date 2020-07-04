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
Route::resource('libro', 'LibroController');
//******nuevo */
Route::get('api/v1/libros','LibroController@getLibros');
Route::get('/home', 'HomeController@index')->name('home');