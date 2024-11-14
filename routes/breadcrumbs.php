<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
Breadcrumbs::for('landing', function ($trail) {
    $trail->push('Home', route('landing'));
});

/*
|--------------------------------------------------------------------------
| User Management Breadcrumbs
|--------------------------------------------------------------------------
*/
Breadcrumbs::for('admin.user.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('Users', route('admin.user.index'));
});
Breadcrumbs::for('admin.user.create', function ($trail) {
    $trail->parent('admin.user.index');
    $trail->push('Add New User', route('admin.user.create'));
});
Breadcrumbs::for('admin.user.show', function ($trail,$user) {
    $trail->parent('admin.user.index');
    $trail->push("Show / ".ucfirst($user->name), route('admin.user.show',$user->id));
});
Breadcrumbs::for('admin.user.edit', function ($trail,$user) {
    $trail->parent('admin.user.index');
    $trail->push(ucfirst($user->name)." / Edit", route('admin.user.edit',$user->id));
});
Breadcrumbs::for('admin.user.edit_role', function ($trail,$user) {
    $roles = $user->getRoleNames();
    $trail->parent('admin.user.index');
    foreach($roles as $role){
        $trail->push($role, route('admin.user.edit_role',$user->id));
    }
        $trail->push("Edit", route('admin.user.edit_role',$user->id));
});

//Roles
Breadcrumbs::for('admin.role.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('Roles', route('admin.role.index'));
});
Breadcrumbs::for('admin.role.create', function ($trail) {
    $trail->parent('admin.role.index');
    $trail->push('Add New Role', route('admin.role.create'));
});
Breadcrumbs::for('admin.role.show', function ($trail,$role) {
    $trail->parent('admin.role.index');
    $trail->push('Show / '.$role->name, route('admin.role.create',$role->id));
});
Breadcrumbs::for('admin.role.edit', function ($trail,$role) {
    $trail->parent('admin.role.index');
    $trail->push($role->name.' / Edit', route('admin.role.edit',$role->id));
});

//Permissions
Breadcrumbs::for('admin.permission.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('Permissions', route('admin.permission.index'));
});
Breadcrumbs::for('admin.permission.create', function ($trail) {
    $trail->parent('admin.permission.index');
    $trail->push('Add New Permission', route('admin.permission.create'));
});
Breadcrumbs::for('admin.permission.show', function ($trail,$permission) {
    $trail->parent('admin.permission.index');
    $trail->push('Show / '.$permission->name, route('admin.permission.show',$permission->id));
});
Breadcrumbs::for('admin.permission.edit', function ($trail,$permission) {
    $trail->parent('admin.permission.index');
    $trail->push($permission->name.' / Edit', route('admin.permission.edit',$permission->id));
});

/*
|--------------------------------------------------------------------------
| Geographical Managements Breadcrumbs
|--------------------------------------------------------------------------
*/

//Countries
Breadcrumbs::for('admin.country.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Countries', route('admin.country.index'));
});
//Regions
Breadcrumbs::for('admin.region.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Regions', route('admin.region.index'));
});
//Districts
Breadcrumbs::for('admin.district.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Districts', route('admin.district.index'));
});
//Wards
Breadcrumbs::for('admin.ward.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Wards', route('admin.ward.index'));
});
//Villages
Breadcrumbs::for('admin.village.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Villages', route('admin.village.index'));
});

//Quick Links
Breadcrumbs::for('admin.quick_link.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Quick Links', route('admin.quick_link.index'));
});

// Slider
Breadcrumbs::for('admin.slider.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All DIT Sliders', route('admin.slider.index'));
});
// Events
Breadcrumbs::for('admin.event.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All DIT Events', route('admin.event.index'));
});


Breadcrumbs::for('admin.staff.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Staff', route('admin.staff.index'));
});


Breadcrumbs::for('admin.education.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Staff Education', route('admin.education.index'));
});


Breadcrumbs::for('admin.skill.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Staff SKill', route('admin.skill.index'));
});

Breadcrumbs::for('admin.experience.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Staff Experiences', route('admin.experience.index'));
});

Breadcrumbs::for('admin.programme.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Programmes', route('admin.programme.index'));
});

Breadcrumbs::for('admin.short_course.index', function ($trail) {
    $trail->parent('landing');
    $trail->push('All Short Courses', route('admin.short_course.index'));
});
