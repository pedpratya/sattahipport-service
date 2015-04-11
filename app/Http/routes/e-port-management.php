<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'e-port-management'), function() {

    Route::get('/',  function() {
            return view('e-port-management.home');
    });
    
    Route::get('port-information', array(
        'as' => 'port-information',
        function() {
            return View::make('e-port-management.port-information');
    }));
    


});

