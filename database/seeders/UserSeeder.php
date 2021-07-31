<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@domain.com',
            'password' => bcrypt('password')
        ])->assignRole('Admin');

        $users = User::factory(49)->create();
        $role = Role::findByName('Client');

        $role->users()->attach($users);
    }
}
