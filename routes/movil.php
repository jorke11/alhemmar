<?php

Route::group(['namespace' => 'Api'], function () {
    Route::post('/user/login', 'UserController@login');
    Route::get('/getOrders', 'OrdersController@getOrdes')->middleware('auth:api');
});
