<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'customer'), function() {

    Route::get('customer-information', array(
        'as' => 'customer-information',
        function() {
            return View::make('customer.customer-information');
    }));
    
});
