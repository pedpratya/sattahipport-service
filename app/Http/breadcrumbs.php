<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home');
});

require __DIR__.'/breadcrumbs/admin.php';