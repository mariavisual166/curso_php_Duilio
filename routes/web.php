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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function () {
    return "hola";
});
Route::get('/user/{id}', function ($id) {
    return $id;
});

*/  
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserCController@index')->name('user.index');
Route::get('/new/user','UserCController@create')->name('user.create');
Route::get('/user/edit/{id}','UserCController@edit')->name('user.edit');
Route::get('/user/{id}','UserCController@show')->name('user.show');
Route::put('/update/{id}','UserCController@update')->name('update');
Route::delete('/user/{id}','UserCController@destroy')->name('user.destroy');
Route::post('/new/user','UserCController@store')->name('user.store');
