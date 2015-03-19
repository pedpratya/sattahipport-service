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

Route::get('/', 'WelcomeController@index');

Route::get('master-top', 'MainController@getMasterTop');

Route::get('fullscreen', 'MainController@getFullscreen');

Route::get('module-list', 'MainController@getModuleList');

Route::get('master-module', 'MainController@getMasterModule');

Route::post('master', array(
    'as' => 'master-post',
    'uses' => 'MainController@create'
));

require __DIR__.'/routes/admin.php';

