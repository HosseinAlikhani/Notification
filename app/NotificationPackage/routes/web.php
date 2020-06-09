<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'NotificationController@index')->name('home');
Route::get('dashboard', 'NotificationController@dashboard')->name('dashboard');
Route::prefix('notification')->group(function(){
   Route::post('', 'NotificationController@postNotification')->name('post.notification');
   Route::patch('', 'NotificationController@patchNotification')->name('patch.notification');
   Route::get('{id}', 'NotificationController@deleteNotification')->name('delete.notification');
});

Route::prefix('login')->group(function(){
    Route::get('', 'AuthController@login')->name('login.view');
    Route::post('', 'AuthController@loginRequest')->name('login.request');
});
Route::get('logout', 'AuthController@logout')->name('logout');