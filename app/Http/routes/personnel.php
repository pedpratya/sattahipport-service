<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'personnel'), function() {
    
    Route::get('/',  function() {
            return view('personnel.home');
    }); 
});
