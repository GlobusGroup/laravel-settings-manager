<?php

use Illuminate\Support\Facades\Route;

Route::group(
  [
    'prefix'=> config('settings.route'),
    'middleware' => config('settings.middleware')
  ], 
  function(){

    Route::get('/','\globusgroup\LaravelSettingsManager\Http\Controllers\SettingsController@index')
    ->name('globusgroup.LaravelSettingsManager.get');
    Route::post('/','\globusgroup\LaravelSettingsManager\Http\Controllers\SettingsController@store')
    ->name('globusgroup.LaravelSettingsManager.post');

});


