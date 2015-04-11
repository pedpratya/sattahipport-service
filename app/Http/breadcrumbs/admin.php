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
    $breadcrumbs->push('องค์กร', route('organization'));
});

Breadcrumbs::register('organization-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('organization');
    $breadcrumbs->push('เพิ่ม-แก้ไข', route('organization-create-or-edit'));
});

Breadcrumbs::register('system-admin', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('ระบบงาน', route('system-admin'));
});

Breadcrumbs::register('system-admin-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('system-admin');
    $breadcrumbs->push('เพิ่ม-แก้ไข', route('system-admin-create-or-edit'));
});

Breadcrumbs::register('usermanagement', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('ผู้ใช้งานในระบบ', route('usermanagement'));
});

Breadcrumbs::register('usermanagement-create-or-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('usermanagement');
    $breadcrumbs->push('เพิ่ม-แก้ไข', route('usermanagement-create-or-edit'));
});

Breadcrumbs::register('usermanagement-userlog', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Userlog', route('usermanagement-userlog'));
});