<?php

Breadcrumbs::register('service', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริการลูกเรือและผู้โดยสาร', 'service/');
});

Breadcrumbs::register('service-home', function($breadcrumbs)
{
    $breadcrumbs->parent('service');
    $breadcrumbs->push('หน้าแรก', 'service/');
});

