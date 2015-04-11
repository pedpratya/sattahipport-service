<?php

Breadcrumbs::register('crm', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบบริหารจัดการลูกค้า CRM', 'crm/');
});

Breadcrumbs::register('crm-home', function($breadcrumbs)
{
    $breadcrumbs->parent('crm');
    $breadcrumbs->push('หน้าแรก', 'crm/');
});

Breadcrumbs::register('crm-registration-system', function($breadcrumbs)
{
    $breadcrumbs->parent('crm');
    $breadcrumbs->push('Registration System', route('crm-registration-system'));
});
