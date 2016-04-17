<?php
// Нач. страница
Route::get('/', 'PagesController@homepage');
// Вход, регистрация и т.н.
Route::auth();

// Ако е влязал потребителя!
Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'PagesController@profile');
    /*Route::get('newjob', 'JobsController@create');
    Route::post('newjob', 'JobsController@store');
    Route::get('myjobs', 'JobsController@index');*/
    Route::resource('myjobs', 'JobsController');
    Route::get('myjobs/{id}/delete', 'JobsController@destroy');
    Route::get('jcandidates/{id}', 'PagesController@jcandidates');

    Route::resource('mycvs', 'CvsController');
});
Route::get('jobs', 'PagesController@jobs');
Route::get('job/{id}', 'PagesController@job')->where('id', '[0-9]+');
Route::get('job/{id}/candidate', 'PagesController@candidate')->where('id', '[0-9]+');
Route::get('contacts', 'PagesController@contacts');
Route::get('faq', 'PagesController@faq');


