<?php

Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('ระบบ Admin', 'admin/');
});

Breadcrumbs::register('admin-home', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('หน้าแรก', 'admin/');
});

Breadcrumbs::register('organization', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('องค์กร', 'admin/organization');
});

Breadcrumbs::register('organization-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('organization');
    $breadcrumbs->push('เพิ่ม-แก้ไข', 'admin/organization-create-or-edit');
});

Breadcrumbs::register('system-admin', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('ระบบงาน', 'admin/system-admin');
});

Breadcrumbs::register('system-admin-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('system-admin');
    $breadcrumbs->push('เพิ่ม-แก้ไข', 'admin/system-admin-create-or-edit');
});

Breadcrumbs::register('usermanagement', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('ผู้ใช้งานในระบบ', 'admin/usermanagement');
});

Breadcrumbs::register('usermanagement-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('usermanagement');
    $breadcrumbs->push('เพิ่ม-แก้ไข', 'admin/usermanagement-create-or-edit');
});

Breadcrumbs::register('usermanagement-userlog', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Userlog', 'admin/usermanagement-userlog');
});