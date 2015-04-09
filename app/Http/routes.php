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

Route::get('module-list', 'MainController@getModuleList');

Route::get('master-module', 'MainController@getMasterModule');

Route::get('left-manu/{id}', 'MainController@getLeftManu');

Route::post('module-list', array(
    'as' => 'module-lis-post',
    'uses' => 'MainController@create'
));

post('sign-in',array(
    'as'  => 'sign-in',
    'uses' => 'MainController@signIn'
));

require __DIR__.'/routes/admin.php';
require __DIR__.'/routes/regis.php';
require __DIR__.'/routes/customer.php';
require __DIR__.'/routes/service.php';
require __DIR__.'/routes/service.php';
require __DIR__.'/routes/no-unit.php';
require __DIR__.'/routes/e-port-management.php';
require __DIR__.'/routes/crm.php';
require __DIR__.'/routes/e-gate.php';
require __DIR__.'/routes/area-management.php';
require __DIR__.'/routes/benefit.php';
require __DIR__.'/routes/traffic-control.php';
require __DIR__.'/routes/inspection.php';
require __DIR__.'/routes/warehouse.php';
require __DIR__.'/routes/transfer.php';
require __DIR__.'/routes/personnel.php';

