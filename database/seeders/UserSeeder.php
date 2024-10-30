<?php

namespace Database\Seeders;

use App\Models\RoleUser;
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
        $user = User::factory()->create([
            'name' => 'Mekan',
            'username' => 'admin',
            'email' => 'admin@admin.com',
        ]);

        RoleUser::create([
            'user_id' => $user->id,
            'role_id' => 1
        ]);
    }
}
