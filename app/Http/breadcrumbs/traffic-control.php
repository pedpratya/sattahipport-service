<?php

Breadcrumbs::register('traffic-control', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริหารหน้าท่าและควบคุมจราจรทางน้ำ', '../traffic-control/home');
});

Breadcrumbs::register('traffic-control-home', function($breadcrumbs)
{
    $breadcrumbs->parent('traffic-control');
    $breadcrumbs->push('หน้าแรก', '../traffic-control/home');
});

