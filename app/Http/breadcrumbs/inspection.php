<?php

Breadcrumbs::register('warehouse', function($breadcrumbs)
{
    $breadcrumbs->push('Warehouse', '../warehouse/home');
});

Breadcrumbs::register('warehouse-home', function($breadcrumbs)
{
    $breadcrumbs->parent('warehouse');
    $breadcrumbs->push('Home', '../warehouse/home');
});

