<?php

Breadcrumbs::register('traffic-control', function($breadcrumbs)
{
    $breadcrumbs->push('Traffic Control', '../traffic-control/home');
});

Breadcrumbs::register('traffic-control-home', function($breadcrumbs)
{
    $breadcrumbs->parent('traffic-control');
    $breadcrumbs->push('Home', '../traffic-control/home');
});

