<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add roles
        Role::upsert([
            [
                'role_name' => 'admin',
            ],
            [
                'role_name' => 'user'
            ],
        ],
            [
                'role_name'
            ]);
    }
}
