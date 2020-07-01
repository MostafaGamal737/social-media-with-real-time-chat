<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiresource('products', 'productController');
Route::group(['prefix'=>'products'], function () {
    Route::apiresource('/{product}/reviews', 'ReviewController');
});
