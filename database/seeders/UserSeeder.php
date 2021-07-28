<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Israel Ogas',
            'email' => 'ogasvega.israel@gmail.com',
            'password' => bcrypt('test1234')
        ])->assignRole('Admin');

        User::factory(99)->create();
    }
}
