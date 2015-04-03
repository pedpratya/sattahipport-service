<?php

Breadcrumbs::register('nounit', function($breadcrumbs)
{
    $breadcrumbs->push('No Unit', '../no-unit/home');
});

Breadcrumbs::register('nounit-test2', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('Test2');
});
