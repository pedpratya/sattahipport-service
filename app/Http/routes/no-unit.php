<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'no-unit'), function() {
    
    Route::get('no3', array(
        'as' => 'no3',
        function() {
            return View::make('no-unit.no3');
    }));
    
    Route::get('no7', array(
        'as' => 'no7',
        function() {
            return View::make('no-unit.no7');
    }));
    
});
