<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'no-unit'), function() {
    
    Route::get('/',  function() {
        
                        $manu = [ 'name' =>'ยังไม่ทราบกลุ่มเมนู',
                            'mainManu' =>'no-unit',
                            'leftManu' =>[
                                            [ 'name' =>'no3','url' => 'no3' ],
                                            [ 'name' =>'no5-1','url' => 'no5-1' ],
                                            [ 'name' =>'no5-1','url' => 'no5-1' ],
                                            [ 'name' =>'no5-2','url' => 'no5-2' ],
                                            [ 'name' =>'no7','url' => 'no7' ],
                                            [ 'name' =>'no24','url' => 'no24' ],
                                            [ 'name' =>'no26','url' => 'no26' ],
                                            [ 'name' =>'no4-1','url' => 'no4-1' ],
                                            [ 'name' =>'no4-2','url' => 'no4-2' ],
                                            [ 'name' =>'no30','url' => 'no30' ],
                                            [ 'name' =>'a01','url' => 'a01' ],
                                            [ 'name' =>'a02','url' => 'a02' ],
                                            [ 'name' =>'a03','url' => 'a03' ],
                                            [ 'name' =>'a04','url' => 'a04' ],
                                            [ 'name' =>'a05','url' => 'a05' ],
                                            [ 'name' =>'a06','url' => 'a06' ],
                                            [ 'name' =>'a07','url' => 'a07' ],
                                            [ 'name' =>'a08','url' => 'a08' ],
                                            [ 'name' =>'test2','url' => 'test2' ]      
                                        ]
                        ];
            return view('no-unit.home', compact('manu'));
    });
    
    Route::get('no3', array(
        'as' => 'no3',
        function() {
            return View::make('no-unit.no3');
    }));
    
        
    Route::get('no5-1', array(
        'as' => 'no5-1',
        function() {
            return View::make('no-unit.no5-1');
    }));
    
    Route::get('no5-2', array(
        'as' => 'no5-2',
        function() {
            return View::make('no-unit.no5-2');
    }));
    
    Route::get('no7', array(
        'as' => 'no7',
        function() {
            return View::make('no-unit.no7');
    }));
    
    Route::get('no24', array(
        'as' => 'no24',
        function() {
            return View::make('no-unit.no24');
    }));
    
    Route::get('no26', array(
        'as' => 'no26',
        function() {
            return View::make('no-unit.no26');
    }));

    Route::get('no4-1', array(
        'as' => 'no4-1',
        function() {
            return View::make('no-unit.no4-1');
    }));

    Route::get('no4-2', array(
        'as' => 'no4-2',
        function() {
            return View::make('no-unit.no4-2');
    }));
    
    Route::get('no30', array(
        'as' => 'no30',
        function() {
            return View::make('no-unit.no30');
    }));

    Route::get('a01', array(
        'as' => 'a01',
        function() {
            return View::make('no-unit.a01');
    }));

    Route::get('a02', array(
        'as' => 'a02',
        function() {
            return View::make('no-unit.a02');
    }));
    Route::get('a03', array(
        'as' => 'a03',
        function() {
            return View::make('no-unit.a03');
    }));
    Route::get('a04', array(
        'as' => 'a04',
        function() {
            return View::make('no-unit.a04');
    }));
    Route::get('a05', array(
        'as' => 'a05',
        function() {
            return View::make('no-unit.a05');
    }));
    Route::get('a06', array(
        'as' => 'a06',
        function() {
            return View::make('no-unit.a06');
    }));
    Route::get('a07', array(
        'as' => 'a07',
        function() {
            return View::make('no-unit.a07');
    }));
    Route::get('a08', array(
        'as' => 'a08',
        function() {
            return View::make('no-unit.a08');
    }));

    Route::get('test2', array(
        'as' => 'test2',
        function() {
            return View::make('no-unit.test2');
    }));
});
