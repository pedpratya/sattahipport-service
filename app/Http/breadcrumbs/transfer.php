<?php

Breadcrumbs::register('transfer', function($breadcrumbs)
{
    $breadcrumbs->push('Transfer', '../transfer/home');
});

Breadcrumbs::register('transfer-home', function($breadcrumbs)
{
    $breadcrumbs->parent('transfer');
    $breadcrumbs->push('Home', '../transfer/home');
});

