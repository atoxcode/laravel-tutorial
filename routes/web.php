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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', 'MemberController@index');
Route::get('/members/create', 'MemberController@create');
Route::get('/members/{slug}', 'MemberController@show');
Route::post('/members', 'MemberController@store');
Route::get('/members/{id}/edit', 'MemberController@edit');
Route::put('/members/{id}', 'MemberController@update');
