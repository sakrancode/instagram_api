<?php

Route::group(['namespace' => 'Sakrancode\InstagramApi\Http\Controllers'], function(){
    Route::get('api', 'ApiController@index');    
});
