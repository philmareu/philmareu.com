<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::resource('projects', 'ProjectsController')->only(['index', 'show']);
Route::view('projects/project', 'projects.show');
Route::view('work', 'work.index');
Route::view('work/work', 'work.show');
Route::view('hire', 'hire');
