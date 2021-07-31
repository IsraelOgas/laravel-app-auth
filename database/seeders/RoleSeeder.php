<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Client']);

        Permission::create(['name' => 'users.index', 'description' => 'Show Dashboard'])->syncRoles([$role1]);

        Permission::create(['name' => 'users.store', 'description' => 'Create new user'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit', 'description' => 'Assign role'])->syncRoles([$role1]);
        // Permission::create(['name' => 'users.update', 'description' => 'Description user'])->syncRoles([$role1]);
        // Permission::create(['name' => 'users.destroy', 'description' => 'Description user'])->syncRoles([$role1]);

        Permission::create(['name' => 'roles.index', 'description' => 'Show roles list'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.store', 'description' => 'Create new role'])->syncRoles([$role1]);
        // Permission::create(['name' => 'roles.edit', 'description' => 'Description role'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.update', 'description' => 'Edit role'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Remove role'])->syncRoles([$role1]);

        Permission::create(['name' => 'contact.index', 'description' => 'Show contact message'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'contact.store', 'description' => 'Send contact message'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'show dashboard', 'description' => 'Show Dashboard'])->syncRoles([$role1, $role2]);
    }
}
