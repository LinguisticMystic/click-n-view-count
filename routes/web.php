<?php

Route::get('/', 'HomeController@main');
Route::get('/upload', 'UploadController@main');
Route::post('/upload', 'UploadController@upload');
Route::get('/statistics', 'StatisticsController@main');
Route::post('/statistics/clicks', 'StatisticsController@addClick');
Route::post('/statistics/views', 'StatisticsController@addView');