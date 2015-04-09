<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'inspection'), function() {
    
    Route::get('home', array(
        'as' => 'home',
        function() {
            return view('inspection.home');
    }));


});

	