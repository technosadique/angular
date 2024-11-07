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

Route::get('/','samples@index');
Route::get('listing','samples@index');
Route::get('edit/{id}','samples@edit');
Route::get('delete/{id}','samples@destroy');
Route::post('update','samples@update');
Route::post('store','samples@store');
Route::get('create','samples@create');
