<?php

Breadcrumbs::register('warehouse', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบคลังสินค้า', '../warehouse/home');
});

Breadcrumbs::register('warehouse-home', function($breadcrumbs)
{
    $breadcrumbs->parent('warehouse');
    $breadcrumbs->push('หน้าแรก', '../warehouse/home');
});

