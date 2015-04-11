<?php

Breadcrumbs::register('e-port-management', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริหารการท่าและระบบอนุมัติ', 'e-port-management/');
});

Breadcrumbs::register('e-port-management-home', function($breadcrumbs)
{
    $breadcrumbs->parent('e-port-management');
    $breadcrumbs->push('หน้าแรก', 'e-port-management/');
});

