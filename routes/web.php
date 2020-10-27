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

Route::get('/', 'MahasiswaController@index');
Route::get('/mahasiswa', 'MahasiswaController@data');

Route::get('/tambahData', 'MahasiswaController@create');
Route::get('mapelByJurusan/{id}', 'MahasiswaController@mapelByJurusan')->name('mapelByJurusan');
Route::post('/students', 'MahasiswaController@store');
Route::post('api', 'MahasiswaController@api')->name('api');
Route::get('/mahasiswa/{i}/edit', 'MahasiswaController@edit');
Route::post('/mahasiswa/{students}/update', 'MahasiswaController@update');
Route::get('/mahasiswa/{i}/delete', 'MahasiswaController@delete');
Route::get('/profil', 'MahasiswaController@show');

