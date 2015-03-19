<?php

// Home > Organization
Breadcrumbs::register('organization', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Organization', route('organization'));
});
