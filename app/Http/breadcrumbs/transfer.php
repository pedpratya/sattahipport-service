<?php

Breadcrumbs::register('transfer', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบเครื่องมือบรรทุกขนถ่าย', 'transfer/');
});

Breadcrumbs::register('transfer-home', function($breadcrumbs)
{
    $breadcrumbs->parent('transfer');
    $breadcrumbs->push('หน้าแรก', 'transfer/');
});

