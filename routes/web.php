<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('projects/{project}', 'ProjectsController@show');
Route::get('projects', 'ProjectsController@index');
Route::view('work', 'work.index');
Route::view('work/work', 'work.show');
Route::view('hire', 'hire');
