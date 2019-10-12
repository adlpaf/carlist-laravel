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
    return view('home');
});
Route::get('/list',              'CarsPricesController@list');
Route::get('/listLowerPrice',    'CarsPricesController@listLowerPrice');
Route::get('/listHigherPrice',   'CarsPricesController@listHigherPrice');
Route::get('/listModels',        'CarsPricesController@listModels');
Route::get('/listAvgMake',       'CarsPricesController@listAvgMake');
Route::get('/listMakeModelYear', 'CarsPricesController@listMakeModelYear');
