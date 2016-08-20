<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('students_list', array('as' => 'students_list', 'uses' => 'Accounts\AccountController@index'));
    Route::get('user/add', array('as' => 'add-user', 'uses' => 'Accounts\AccountController@create'));
    Route::get('user/list', array('as' => 'list-users', 'uses' => 'Accounts\AccountController@index'));
    Route::get('user/get-users-list', array('as' => 'get-users-list', 'uses' => 'Accounts\AccountController@getUsersList'));
    Route::post('user/save', 'Accounts\AccountController@saveUser');
});
