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



Route::get('/','createsController@home');
Route::get('/create', function () {return view('create');});
Route::post('/insert','createsController@add');
Route::get('/update/{id}','createsController@update');
Route::post('/edit/{id}','createsController@edit');
Route::get('/read/{id}','createsController@read');
Route::get('/delete/{id}','createsController@delete');
