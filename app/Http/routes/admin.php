<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'admin'), function() {

    Route::get('organization', array(
        'as' => 'organization',
        function() {
            return View::make('admin.organization');
    }));
    
    Route::get('create-or-edit', array(
        'as' => 'create-or-edit',
        function() {
            return View::make('admin.create-or-edit');
    }));
    

    Route::post('organization', array(
        'as' => 'organization-post',
        'uses' => 'OrganizationController@create'
    ));

});

