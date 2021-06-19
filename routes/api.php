<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//product

//tampil semua data
Route::get('barang', 'API\ProductController@index');
//tampil data dari id
Route::get('barang/{id}', 'API\ProductController@show' );
//tambah
Route::post('barang', 'API\ProductController@store');
//hapus
Route::delete('barang/{id}', 'API\ProductController@destroy');
//update
Route::patch('barang/{id}', 'API\ProductController@update');


//Category

//tampil semua data
Route::get('kategori', 'API\CategoryController@index');
//tampil data dari id
Route::get('kategori/{id}', 'API\CategoryController@show' );
//tambah
Route::post('kategori', 'API\CategoryController@store');
//hapus
Route::delete('kategori/{id}', 'API\CategoryController@destroy');
//update
Route::patch('kategori/{id}', 'API\CategoryController@update');