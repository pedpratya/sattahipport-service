<?php

Breadcrumbs::register('benefit', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบจัดเก็บผลประโยชน์', 'benefit/');
});

Breadcrumbs::register('benefit-home', function($breadcrumbs)
{
    $breadcrumbs->parent('benefit');
    $breadcrumbs->push('หน้าแรก', 'benefit/');
});

