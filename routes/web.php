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
    return view('welcome');
});

//導向至InputController的index方法
Route::get('/input','InputController@index');

//導向至InputController的input方法
Route::post('/input','InputController@input');

//導向至InputController的destroy方法
//此處id欄位需與view中抓取的欄位一致才抓的到檔案
Route::delete('/input/{id}','InputController@destroy');

Route::get('/input/update/{id}','InputController@update');

//導向至ChartController的index方法
Route::get('/chart','ChartController@index');

Route::post('/chart/input','ChartController@input');