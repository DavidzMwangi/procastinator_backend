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

        Route::post('recover_password', 'Login2Controller@recoverPassword');
    });
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

});
