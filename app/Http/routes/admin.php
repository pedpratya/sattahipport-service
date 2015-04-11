<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'admin'), function() {
    
    Route::get('/',  function() {
            return view('admin.home');
    });
    
    Route::get('organization', array(
        'as' => 'organization',
        function() {
            return View::make('admin.organization');
    }));
    
    Route::get('organization-create-or-edit', array(
        'as' => 'organization-create-or-edit',
        function() {
            return View::make('admin.organization-create-or-edit');
    }));
    
    Route::post('organization', array(
        'as' => 'organization-post',
        'uses' => 'OrganizationController@create'
    ));

    Route::get('system-admin', array(
        'as' => 'system-admin',
        function() {
            return View::make('admin.system-admin');
    }));
    
    Route::get('system-admin-create-or-edit', array(
        'as' => 'system-admin-create-or-edit',
        function() {
            return View::make('admin.system-admin-create-or-edit');
    }));
    
    Route::get('usermanagement', array(
        'as' => 'usermanagement',
        function() {
            return View::make('admin.usermanagement');
    }));
    
    Route::get('usermanagement-create-or-edit', array(
        'as' => 'usermanagement-create-or-edit',
        function() {
            return View::make('admin.usermanagement-create-or-edit');
    }));
    
    Route::get('usermanagement-userlog', array(
        'as' => 'usermanagement-userlog',
        function() {
            return View::make('admin.usermanagement-userlog');
    }));

});

