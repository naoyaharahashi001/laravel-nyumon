<?php

Route::get('/', 'IndexController@index')->name('tasks.index');
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
