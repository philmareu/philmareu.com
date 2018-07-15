<?php

Route::view('/', 'welcome');
Route::resource('projects', 'ProjectsController')->only(['index', 'show']);
Route::view('projects/project', 'projects.show');
Route::view('work', 'work.index');
Route::view('work/work', 'work.show');
Route::view('posts', 'posts.index');
Route::view('posts/post', 'posts.show');
Route::view('about', 'about');
Route::view('hire', 'hire');
