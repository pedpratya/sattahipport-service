<?php

Breadcrumbs::register('personnel', function($breadcrumbs)
{
    $breadcrumbs->push('Personnel', '../personnel/home');
});

Breadcrumbs::register('personnel-home', function($breadcrumbs)
{
    $breadcrumbs->parent('personnel');
    $breadcrumbs->push('Home', '../personnel/home');
});

