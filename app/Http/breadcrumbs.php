<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home','../module-list');
});

require __DIR__.'/breadcrumbs/admin.php';