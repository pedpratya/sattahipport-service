<?php

Breadcrumbs::register('area-management', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริหารพื้นที่ประโยชน์ ทสพ.-ทร.', '../area-management/home');
});

Breadcrumbs::register('area-management-home', function($breadcrumbs)
{
    $breadcrumbs->parent('area-management');
    $breadcrumbs->push('หน้าแรก', '../area-management/home');
});

