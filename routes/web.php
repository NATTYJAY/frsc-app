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

Auth::routes();
Route::get('/', 'HomeController@index');
<<<<<<< HEAD
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
Route::get('/assignRole','DriverItemController@assignRole');
Route::get('/showall','DriverItemController@showAllvendorDriverExpiration');
Route::post('/registerole','DriverItemController@register_role'); 
Route::get('/driver/{driver_id}/edited','AdminDriverController@showDriverModal');
Route::post('/driver/update','AdminDriverController@updated');
Route::post('/driver/updateImage/uyo','AdminDriverController@img');
=======

    Route::resources([
    'driver' => 'AdminDriverController',
    'category'=>'AdminCategoryController'
	]);

	Route::get('/findcar/{plate_number}','AdminVISController@findCar')->name("find-plate-car");
	Route::get('/search/','AdminVISController@search');
	Route::get('/search/mobile','AdminVISController@mobile');
	Route::get('/search/inspect/{id}','AdminVISController@index')->name("inspect-car");
	Route::get('/search/register/{id}','AdminVISController@create');
	Route::get('/search/update/{id}','AdminVISController@show');
	Route::post('/search/updateM/{id}','AdminVISController@update');
	Route::get('/search/{id}/delete','AdminVISController@destroy');
	Route::get('/search/{id}/edit','AdminVISController@edit');
	Route::post('/registerVehicle','AdminVISController@store');
	Route::get('/search/registerItem/{id}','DriverItemController@create'); 
	Route::post('/registerItem','DriverItemController@store'); 
	Route::get('/assignRole','DriverItemController@assignRole');
	Route::get('/showall','DriverItemController@showAllvendorDriverExpiration');
	

	Route::post('/registerole','DriverItemController@register_role'); 

	Route::get('/driver/{driver_id}/edited','AdminDriverController@showDriverModal');

	Route::post('/driver/update/{id}','AdminDriverController@updated'); 


>>>>>>> 0d2da3b3666cb659e194a1631cbce330c6a8ee9f
Route::group(['middleware'=>'user'],function(){
   Route::resources([
    'vendor' => 'VendorController'
	]);
});
Route::prefix('admin')->group(function () {
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/add','VendorController@index'); 
Route::post('/save','VendorController@store'); 
Route::get('/view','VendorController@show'); 
Route::get('/renew/{id}','VendorController@edit');
Route::post('/update/{id}','VendorController@update'); 
Route::get('/delete/{id}','VendorController@destroy'); 
});

Route::resources([
    'product'=>'VendorProductController',
	]);



