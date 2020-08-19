<?php

use Illuminate\Support\Facades\Route;

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.'], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('user-infos', 'UserInfoController');
    Route::resource('teams', 'TeamController');

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/showuserinfo', 'UserController@showuserinfo')->name('showuserinfo');

Route::post('/file','UserController@doUpload')-> name('file');

Route::get('/showteam', 'TeamController@showuserinfo')->name('showteam');