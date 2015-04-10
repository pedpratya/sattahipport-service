<?php

Breadcrumbs::register('service', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริการลูกเรือและผู้โดยสาร', '../service/home');
});

Breadcrumbs::register('service-home', function($breadcrumbs)
{
    $breadcrumbs->parent('service');
    $breadcrumbs->push('หน้าแรก', '../service/home');
});

