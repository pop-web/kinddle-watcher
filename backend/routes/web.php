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

Route::get('/mypage', 'MypageController@index')->name('mypage.index');
Route::post('/mypage/create', 'MypageController@create')->name('mypage.create');
Route::delete('/mypage/delete', 'MypageController@delete')->name('mypage.delete');

Route::post('/scrape', 'ScrapeController@index')->name('scrape.index');
