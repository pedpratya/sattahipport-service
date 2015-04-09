<?php

Breadcrumbs::register('service', function($breadcrumbs)
{
    $breadcrumbs->push('Service', '../service/home');
});

Breadcrumbs::register('service-home', function($breadcrumbs)
{
    $breadcrumbs->parent('service');
    $breadcrumbs->push('Home', '../service/home');
});

