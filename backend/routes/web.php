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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::post('register/pre_check', 'Auth\RegisterController@preCheck')->name('register.pre_check');
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

Route::get('/mypage', 'MypageController@index')->name('mypage.index');
Route::post('/mypage/create', 'MypageController@create')->name('mypage.create');
Route::delete('/mypage/delete', 'MypageController@delete')->name('mypage.delete');


Route::resource('config','ConfigController',['only'=>['index','create','store','destroy']]);

Route::post('/scrape', 'ScrapeController@index')->name('scrape.index');
