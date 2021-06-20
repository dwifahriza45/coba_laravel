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

Route::get('/', 'HomeController@index');
Route::get('/read', 'ReadController@index');
Route::get('/kota/{id}', 'ReadController@detailKn');

// show
Route::get('/crud', 'crudController@index');

// Show detail
Route::get('/crud/{id}', 'crudController@show');

// create
Route::get('/create', 'crudController@create');
Route::post('/crud', 'crudController@store');

// update
Route::get('/crud/{id}/update', 'crudController@edit');
Route::patch('/crud/{id}', 'crudController@update');

// delete
Route::delete('/crud/{id}', 'crudController@destroy');
