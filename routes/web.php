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

Route::get('/', function () {
    return view('index');
});

Route::get('/goodslist','GoodsController@goodsList');

Route::post('/goodscreate','GoodsController@goodsCreate');

Route::get('/goodsdel/{id}','GoodsController@goodsDel');

Route::get('/goodsedit/{id}','GoodsController@goodsEdit');

Route::post('/goodsupdate','GoodsController@goodsUpdate');

Route::get('/capitalconfig','CapitalController@capitalConfig');

Route::post('/capitalupdate','CapitalController@capitalUpdate');

Route::get('/orderin','OrderController@orderin');

Route::post('/orderincreate','OrderController@orderInCreate');

Route::get('/orderout','OrderController@orderOut');

Route::post('/orderoutcreate','OrderController@orderOutCreate');