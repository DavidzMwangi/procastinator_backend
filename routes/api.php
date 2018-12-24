<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('hello',function (){
   return json_encode(\App\User::all());
});

Route::group(['namespace'=>'Api'],function () {

    Route::group(['namespace' => 'Auth'], function () {
        Route::post('login', 'LoginController@login');
        Route::post('register', 'RegisterController@register');

        Route::post('recover_password', 'LoginController@recoverPassword');
    });
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::group(['middleware'=>'auth:api'],function (){
       Route::post('new_event','EventController@newEvent');
       Route::get('all_events','EventController@allEvents');
       Route::get('toggle_event/{event}','EventController@toggleEvent');
       Route::get('auth_info',function (){
           return response()->json(\Illuminate\Support\Facades\Auth::user());
//          return json_encode(\Illuminate\Support\Facades\Auth::user());
       });
       
       Route::get('delete_event/{event}','EventController@deleteEvent');
    });
});
