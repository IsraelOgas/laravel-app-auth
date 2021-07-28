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

        Permission::create(['name' => 'user.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'user.store'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'contact.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'contact.store'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'show dashboard'])->syncRoles([$role1, $role2]);
    }
}
