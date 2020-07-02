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

Route::middleware('auth:api')->get('/api', function (Request $request) {
    /*return $request->user();*/

    Route::get('node/aadharcheck', 'NodeController@AadharCheack');
    Route::get('node/pancheck', 'NodeController@PanCheack');
    Route::get('node/sponsercheck', 'NodeController@SponserCheck');
    Route::get('node/couponcheck', 'NodeController@CouponCheck');
    Route::get('node/getsponser', 'NodeController@GetSponser');
    Route::get('node/create', 'NodeController@Create');
    Route::post('node/save', 'NodeController@Save');


});
