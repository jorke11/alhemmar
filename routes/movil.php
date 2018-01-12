<?php

Route::group(['namespace' => 'Api'], function () {
    Route::post('/user/login', 'UserController@login');
    Route::post('/store', 'OrdersController@store')->middleware('auth:api');
    Route::get('/getOrders', 'OrdersController@getOrders')->middleware('auth:api');
    Route::get('/cancelOrders/{id}', 'OrdersController@cancelOrder')->middleware('auth:api');
});
