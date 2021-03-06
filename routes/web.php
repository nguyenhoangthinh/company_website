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



Route::get('/', 'FrontController@index')->name('home');
Auth::routes();
Route::get('/logout','Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'admin','middleware'=> 'auth','admin'],function(){

	Route::get('/page',function(){
			return view('admin.index');
	})->name('admin.index');
	Route::get('article/autocomplete', ['uses'=>'ArticlesController@autocomplete', 'as'=>'article.autocomplete']);
	Route::resource('article','ArticlesController');
	Route::resource('category','CategoriesController');
});
