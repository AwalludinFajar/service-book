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

Route::middleware('auth:api')->get('/kategoribook', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
  Route::get('kategori_book', 'Api\ApiKategoriBookController@index');
  Route::post('new/kategori_book', 'Api\ApiKategoriBookController@store');
  Route::post('delete/kategori_book', 'Api\ApiKategoriBookController@destroy');
});
