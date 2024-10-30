<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            1 => 'super_admin',
            2 => 'admin',
            3 => 'editor',
            4 => 'viewer'
        ];


        foreach($datas as $key => $value){
            Role::create([
                'name' => $value
            ]);
        }
        
    }
}
