<?php
// Нач. страница
Route::get('/', 'PagesController@homepage');
// Вход, регистрация и т.н.
Route::auth();

// Ако е влязал потребителя!
Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'PagesController@profile');
    Route::get('newjob', 'JobsController@create');
    Route::post('newjob', 'JobsController@store');
    Route::get('myjobs', 'JobsController@index');
});


