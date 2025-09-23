<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'view own profile']); // 1
        Permission::create(['name' => 'edit own profile']); // 1
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'assign role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'view dashboard']); // 1
        Permission::create(['name' => 'view admin dashboard']);
        Permission::create(['name' => 'create task']); // 1
        Permission::create(['name' => 'edit task']); // 1
        Permission::create(['name' => 'delete task']); // 1
        Permission::create(['name' => 'view tasks']); // 1
        Permission::create(['name' => 'create project']); // 1
        Permission::create(['name' => 'assign user to project']); // 2
        Permission::create(['name' => 'edit project']); // 2
        Permission::create(['name' => 'delete project']); // 2
        Permission::create(['name' => 'view projects']);

        // update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'user']); // 1
        $role->givePermissionTo('view dashboard',
            'view own profile',
            'edit own profile',
            'create task',
            'edit task',
            'delete task',
            'view tasks',
            'create project',
        );

        $role = Role::create(['name' => 'owner project']); // 3
        $role->givePermissionTo('edit project',
            'assign user to project',
            'delete project',
        );

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
