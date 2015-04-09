<?php

Breadcrumbs::register('inspection', function($breadcrumbs)
{
    $breadcrumbs->push('Inspection', '../inspection/home');
});

Breadcrumbs::register('inspection-home', function($breadcrumbs)
{
    $breadcrumbs->parent('inspection');
    $breadcrumbs->push('Home', '../inspection/home');
});

