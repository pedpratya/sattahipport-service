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

Breadcrumbs::register('crm-registration-system', function($breadcrumbs)
{
    $breadcrumbs->parent('crm');
    $breadcrumbs->push('Registration System', '../crm/registration-system');
});
