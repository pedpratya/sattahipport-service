<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home','../module-list');
});

require __DIR__.'/breadcrumbs/admin.php';
require __DIR__.'/breadcrumbs/no_unit.php';
require __DIR__.'/breadcrumbs/personnel.php';
require __DIR__.'/breadcrumbs/crm.php';
require __DIR__.'/breadcrumbs/e-gate.php';
require __DIR__.'/breadcrumbs/area-management.php';
require __DIR__.'/breadcrumbs/service.php';
require __DIR__.'/breadcrumbs/benefit.php';
require __DIR__.'/breadcrumbs/traffic-control.php';
require __DIR__.'/breadcrumbs/counting.php';
require __DIR__.'/breadcrumbs/warehouse.php';
require __DIR__.'/breadcrumbs/transfer.php';
require __DIR__.'/breadcrumbs/personnel.php';
require __DIR__.'/breadcrumbs/security.php';