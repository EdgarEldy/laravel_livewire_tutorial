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
        // Add roles seeder
        $roles = [
            'Admin',
            'User'
        ];

        foreach ($roles as $role) {
            $role = Role::firstOrNew([
                'role_name' => $role
            ]);

            $role->save();
        }
    }
}
