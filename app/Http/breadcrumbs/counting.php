<?php

Breadcrumbs::register('counting', function($breadcrumbs)
{
    $breadcrumbs->push('Counting', '../counting/home');
});

Breadcrumbs::register('counting-home', function($breadcrumbs)
{
    $breadcrumbs->parent('counting');
    $breadcrumbs->push('Home', '../counting/home');
});

