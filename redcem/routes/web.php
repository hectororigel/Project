<?php


Route::get('/', 'controller@index' );


Route::resource('/users', 'RedcemController');
Route::resource('/redcem', 'RedcemController');

Route::get('users/{user}/edit', 'RedcemController@edit');


/*

Route::get('/users/create', 'RedcemController@create');

Route::resource('/redcem', 'RedcemController')->middleware('auth');

Route::get('users/{user}/edit', 'RedcemController@edit')->middleware('auth');

*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
