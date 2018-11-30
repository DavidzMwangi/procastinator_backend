<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('master',function (){
    return view('backend.dashboard');
});
Route::group(['middleware'=>'auth','namespace'=>'Backend'],function (){

    Route::group(['prefix'=>'event','as'=>'event.'],function (){
       Route::get('new','EventController')->name('new');
       Route::post('new_event','EventController@newEvent')->name('new_event');
       Route::get('all_events','EventController@allEvents')->name('all_events');
    });
});
