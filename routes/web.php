<?php

Route::view('/', 'welcome');
Route::view('projects', 'projects.index');
Route::view('projects/project', 'projects.show');
Route::view('screencasts', 'screencasts.index');
Route::view('screencasts/screencast', 'screencasts.show');
Route::view('work', 'work.index');
Route::view('work/work', 'work.show');
Route::view('posts', 'posts.index');
Route::view('posts/post', 'posts.show');
Route::view('about', 'about');
Route::view('hire', 'hire');
