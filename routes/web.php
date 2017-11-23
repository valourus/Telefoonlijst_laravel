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

Route::get("/", "PagesController@index");

Route::get("/team-ao", "PagesController@teamAO");

Route::get("/team-ib", "PagesController@teamIB");

Route::get("/create-role", "RolesController@index");

Route::post("/submitRole", "RolesController@createRole");

Route::post("/submitPermission", "RolesController@createPermission");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
