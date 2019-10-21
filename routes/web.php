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

Route::post('/add_category','AddCategoryController@create')->name('addCategoryPost');
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories','categoryController@index');
Route::get('/add_categories','AddCategoryController@index')->name('addCategory');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
