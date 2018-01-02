<?php

Route::group(['namespace' => 'Api'], function () {
    Route::post('/user/login', 'UserController@login');
    Route::post('/store', 'OrdersController@store')->middleware('auth:api');
    Route::get('/getOrders', 'OrdersController@getOrdes')->middleware('auth:api');
});
