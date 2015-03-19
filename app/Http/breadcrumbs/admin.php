<?php

// Home > Organization
Breadcrumbs::register('organization', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Organization', route('organization'));
});

Breadcrumbs::register('organization-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('organization');
    $breadcrumbs->push('Create or Edit', route('organization-create-or-edit'));
});

Breadcrumbs::register('system-admin', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('System Admin', route('system-admin'));
});

Breadcrumbs::register('system-admin-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('system-admin');
    $breadcrumbs->push('Create or Edit', route('system-admin-create-or-edit'));
});

Breadcrumbs::register('usermanagement', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Usermanagement', route('usermanagement'));
});

Breadcrumbs::register('usermanagement-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('usermanagement');
    $breadcrumbs->push('Create or Edit', route('usermanagement-create-or-edit'));
});

Breadcrumbs::register('usermanagement-userlog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Userlog', route('usermanagement-userlog'));
});