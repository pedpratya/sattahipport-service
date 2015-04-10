<?php

Breadcrumbs::register('security', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบรักษาความปลอดภัย', '../security/home');
});

Breadcrumbs::register('security-home', function($breadcrumbs)
{
    $breadcrumbs->parent('security');
    $breadcrumbs->push('หน้าแรก', '../security/home');
});

