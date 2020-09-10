<?php

use Illuminate\Support\Facades\Route;

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Auth::routes();
Auth::routes([
	'register' => false,
	'verify' => true,
]);

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.'] , function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('teams', 'TeamController');
	Route::resource('roles', 'RoleController');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getuser', 'UserController@getuser')->name('getuser');

// Route::post('/file','UserController@doUpload')-> name('file');
// Route::get('/getmember', 'TeamController@getmember')->name('getmember');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
