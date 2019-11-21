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

Route::middleware('auth:api')->get('/masterbook', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
  Route::get('master_book', 'Api\ApiMasterBookController@index');
  Route::post('new/master_book', 'Api\ApiMasterBookController@store');
  Route::post('remove/master_book', 'Api\ApiMasterBookController@destroy');
  Route::post('update/master_book/{id}', 'Api\ApiMasterBookController@update');
});
