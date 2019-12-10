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

Route::get('login', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@postlogin')->name('login.post');
Route::get('login/staff', 'LoginController@staff')->name('login.staff');
Route::get('login/guest', 'LoginController@guest')->name('login.guest');
Route::get('sign-in', 'LoginController@signin')->name('signin');
Route::post('signin', 'LoginController@postsignin')->name('signin.post');
Route::post('logout', 'LoginController@logout')->name('logout');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/pickup/air', 'HomeController@air')->name('air.pickup');
Route::post('/pickup/air', 'HomeController@flight')->name('book.flight');
