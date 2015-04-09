<?php

Breadcrumbs::register('crm', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริหารจัดการลูกค้า CRM', '../crm/home');
});

Breadcrumbs::register('crm-home', function($breadcrumbs)
{
    $breadcrumbs->parent('crm');
    $breadcrumbs->push('หน้าแรก', '../crm/home');
});

