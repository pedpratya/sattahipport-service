<?php

Breadcrumbs::register('security', function($breadcrumbs)
{
    $breadcrumbs->push('Security', '../security/home');
});

Breadcrumbs::register('security-home', function($breadcrumbs)
{
    $breadcrumbs->parent('security');
    $breadcrumbs->push('Manual', '../security/home');
});

