<?php
Route::get('/', function () {
    return view('home');
});
Route::get('lang/{locale}', 'LocalizationController@index');
