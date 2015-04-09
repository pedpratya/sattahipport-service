<?php

Breadcrumbs::register('benefit', function($breadcrumbs)
{
    $breadcrumbs->push('Benefit', '../benefit/home');
});

Breadcrumbs::register('benefit-home', function($breadcrumbs)
{
    $breadcrumbs->parent('benefit');
    $breadcrumbs->push('Home', '../benefit/home');
});

