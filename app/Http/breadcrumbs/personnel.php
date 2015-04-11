<?php

Breadcrumbs::register('personnel', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบุคลากรแรงงาน', 'personnel/');
});

Breadcrumbs::register('personnel-home', function($breadcrumbs)
{
    $breadcrumbs->parent('personnel');
    $breadcrumbs->push('หน้าแรก', 'personnel/');
});

