<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home');
});

// Home > Organization
Breadcrumbs::register('organization', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Organization', route('organization'));
});

Breadcrumbs::register('category', function($breadcrumbs, $category) {
    if ($category->parent)
        $breadcrumbs->parent('category', $category->parent);
    else
        $breadcrumbs->parent('home');

    $breadcrumbs->push($category->title, route('category', $category->slug));
});