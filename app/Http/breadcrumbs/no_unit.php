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

Breadcrumbs::register('nounit-a01', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A01');
});

Breadcrumbs::register('nounit-a02', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A02');
});

Breadcrumbs::register('nounit-a03', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A03');
});

Breadcrumbs::register('nounit-a04', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A04');
});

Breadcrumbs::register('nounit-a05', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A05');
});

Breadcrumbs::register('nounit-a06', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A06');
});

Breadcrumbs::register('nounit-a07', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A07');
});

Breadcrumbs::register('nounit-a08', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('A08');
});

Breadcrumbs::register('nounit-no24', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No24');
});

Breadcrumbs::register('nounit-no26', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No26');
});

Breadcrumbs::register('nounit-no3', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No3');
});

Breadcrumbs::register('nounit-no30', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No30');
});

Breadcrumbs::register('nounit-no4-1', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No4-1');
});

Breadcrumbs::register('nounit-no4-2', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No4-2');
});

Breadcrumbs::register('nounit-no5-1', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No5-1');
});

Breadcrumbs::register('nounit-no5-2', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No5-2');
});

Breadcrumbs::register('nounit-no7', function($breadcrumbs)
{
    $breadcrumbs->parent('nounit');
    $breadcrumbs->push('No7');
});
