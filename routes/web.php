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

Route::get('/portofolio', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('webserviceb');
})->name('webserviceb');

Route::get('/identitas-saya', 'DikaController@index')->name('ridentitas');

// route untuk product
//
 Route::get('product', 'ProductController@index' ) ->name('product.index');

//  tambah data
Route::get('product/add', 'ProductController@add' ) ->name('product.add');

//  simpan data
Route::post('product/save', 'ProductController@save' ) ->name('product.save');
//  edit data
Route::get('product/{id}/edit', 'productController@edit' ) ->name('product.edit');

//  update data
Route::post('product/{id}/update', 'productController@update' );

//  delete data
Route::get('product/{id}/delete', 'productController@delete' );

//
// route untuk category
//

Route::get('category', 'CategoryController@index' ) ->name('category.index');

//  tambah category
Route::get('category/add', 'CategoryController@add' ) ->name('category.add');

//  simpan data
Route::post('category/save', 'CategoryController@save' ) ->name('category.save');

//  edit data
Route::get('category/{id}/edit', 'CategoryController@edit' ) ->name('category.edit');

//  update data
Route::post('category/{id}/update', 'CategoryController@update' );

//  delete data
Route::get('category/{id}/delete', 'CategoryController@delete' );

//mid
Route::get('mid', 'UtsController@index' ) ->name('midsemester.index');
//  tambah data
Route::get('mid/add', 'UtsController@add' ) ->name('midsemester.add');

//  simpan data
Route::post('mid/save', 'UtsController@save' ) ->name('midsemester.save');


//  delete data
Route::get('mid/{id_239}/delete', 'UtsController@delete' );