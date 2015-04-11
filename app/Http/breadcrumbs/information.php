<?php

Breadcrumbs::register('information', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบข้อมูลสารสนเทศ', 'information/');
});

Breadcrumbs::register('information-home', function($breadcrumbs)
{
    $breadcrumbs->parent('information');
    $breadcrumbs->push('หน้าแรก', 'information/');
});

