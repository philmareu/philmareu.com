<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@postContact');

Route::get('work/{slug}', 'WorksController@show');
//Route::get('work', 'WorksController@index');