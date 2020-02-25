<?php

use Illuminate\Http\Request;
use App\Cities;
use App\Delivery_times;
use App\Partners;
use App\Cities_times;

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

Route::post('cities/{city_id}/delivery-times', function(Request $request) {
    return Cities_times::create($request->all);
});

Route::get('partners', function() {
  
    return Partners::all();
});

Route::get('cities', function() {
  
    return Cities::all();
});

Route::get('delivry_times', function() {
  
    return Delivery_times::all();
});

Route::post('cities', function(Request $request) {
    return Cities::create($request->all);
});

Route::post('partners', function(Request $request) {
    return Partners::create($request->all);
});

Route::post('delivry_times', function(Request $request) {
    return Partners::create($request->all);
});

Route::get('partners', 'PartnersController@index');
Route::post('partners', 'PartnersController@store');

Route::get('cities', 'CitiesController@index');
Route::post('cities', 'CitiesController@store');

Route::get('delivery-times', 'DeliveryTimesController@index');
Route::post('delivery-times', 'DeliveryTimesController@store');


Route::post('cities/{city_id}/delivery-times', 'CitiesTimesController@attach');


Route::get('cities/{city_id}/delivery-dates-times/{number_of_days}', 'DeliveryTimesController@days');

/*

Route::group(['middleware' => 'auth'], function () {
	Route::resource('cities', 'CitiesController', ['except' => ['show']]);
	Route::resource('partners', 'PartnersController', ['except' => ['show']]);
	Route::resource('delivry_times', 'Delivry_timesController', ['except' => ['show']]);

});


Route::apiResource('cities', 'CitiesController');
    Route::post('cities/{name}', 'CitiesController@store');
*/