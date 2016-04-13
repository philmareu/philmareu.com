<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@page');
Route::get('contact', 'PagesController@page');

Route::get('work/{slug}', 'WorksController@show');
Route::get('work', 'WorksController@index');