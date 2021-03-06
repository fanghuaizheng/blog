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

Route::redirect('/', '/home', 301);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('scienceWorks', 'ScienceWorkController@index')->name('scienceWorks')->middleware('auth');

Route::resource('teachingWork', 'TeachingWorkController')->middleware('auth');
Route::get('tongji', 'TongJiController@index')->name('tongji')->middleware('auth');