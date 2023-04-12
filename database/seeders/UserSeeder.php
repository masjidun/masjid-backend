<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin seeder
        User::factory()->create([
            'name' => 'Administrator',
            'role' => User::ROLE_ADMIN,
            'email' => 'admin@webmasjid.org',
        ]);

        // member seeder
        User::factory()->create([
            'name' => 'Member',
            'role' => User::ROLE_MEMBER,
            'email' => 'member@webmasjid.org',
        ]);
    }
}
