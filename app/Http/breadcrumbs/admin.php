<?php

// Home > Organization
Breadcrumbs::register('organization', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Organization', route('organization'));
});

Breadcrumbs::register('create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('organization');
    $breadcrumbs->push('Create or Edit', route('create-or-edit'));
});