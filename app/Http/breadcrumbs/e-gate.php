<?php

Breadcrumbs::register('e-gate', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบ E-Gate', 'e-gate/');
});

Breadcrumbs::register('e-gate-home', function($breadcrumbs)
{
    $breadcrumbs->parent('e-gate');
    $breadcrumbs->push('หน้าแรก', 'e-gate/');
});

