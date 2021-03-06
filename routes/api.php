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
Route::group(['middleware'=>'cors'], function(){
  Route::resource('/gestores', 'Api\GestorController');
  Route::resource('/imoveis', 'Api\ImovelController');
  Route::resource('/repasses', 'Api\RepasseController');
  Route::resource('/terceirizados', 'Api\TerceirizadoController');
});
