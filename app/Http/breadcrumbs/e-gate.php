<?php

Breadcrumbs::register('e-gate', function($breadcrumbs)
{
    $breadcrumbs->push('E-Gate', '../e-gate/home');
});

Breadcrumbs::register('e-gate-home', function($breadcrumbs)
{
    $breadcrumbs->parent('e-gate');
    $breadcrumbs->push('Home', '../e-gate/home');
});

