<?php

Breadcrumbs::register('counting', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบตรวจนับและตรวจสอบสินค้า', 'counting/');
});

Breadcrumbs::register('counting-home', function($breadcrumbs)
{
    $breadcrumbs->parent('counting');
    $breadcrumbs->push('หน้าแรก', 'counting/');
});

