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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
    'driver' => 'AdminDriverController',
    'category'=>'AdminCategoryController'
	]);
	Route::get('/search/','AdminVISController@search');
	Route::get('/search/inspect/{id}','AdminVISController@index');
	Route::get('/search/register/{id}','AdminVISController@create');
	Route::get('/search/update/{id}','AdminVISController@show');
	Route::post('/search/updateM/{id}','AdminVISController@update');
	Route::get('/search/{id}/delete','AdminVISController@destroy');
	Route::get('/search/{id}/edit','AdminVISController@edit');
	Route::post('/registerVehicle','AdminVISController@store');
	Route::get('/search/registerItem/{id}','DriverItemController@create'); 
	Route::post('/registerItem','DriverItemController@store'); 

	Route::get('/driver/{driver_id}/edited','AdminDriverController@showDriverModal');

	Route::post('/driver/update/{id}','AdminDriverController@updated'); 

});

// Route::get('/result/inspectItem',function(){
//     return view('admin.inspect.result.index');
// });

