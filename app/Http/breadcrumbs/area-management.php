<?php

Breadcrumbs::register('area-management', function($breadcrumbs)
{
    $breadcrumbs->push('Area Management', '../area-management/home');
});

Breadcrumbs::register('area-management-home', function($breadcrumbs)
{
    $breadcrumbs->parent('area-management');
    $breadcrumbs->push('Home', '../area-management/home');
});

