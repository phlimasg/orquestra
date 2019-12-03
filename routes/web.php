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
Route::get('/albuns', function () {
    return view('album');
})->name('album');

Route::get('/albuns/fotos/1', function () {
    return view('foto1');
})->name('teatro');
Route::get('/albuns/fotos/2', function () {
    return view('foto2');
})->name('mak');
Route::get('/albuns/fotos/3', function () {
    return view('foto3');
})->name('teatro_abel');

Route::get('/download', function () {
    return redirect('http://bit.ly/2O6pn2r');
})->name('download');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
