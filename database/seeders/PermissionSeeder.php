<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating permissions array
        $permissions = [
            'Category',
            'Product',
            'Customer',
            'Order',
            'Role',
            'User',
            'Permission',
        ];

        // Get admin role
        $admin_role = Role::whereName('Admin')->first();

        // Get the first user
        $user = User::first();

        // Associate admin role with the first user
        $user->roles()->sync($admin_role->pluck('id')->toArray());

        // Establish the relationship between permissions and roles
        foreach ($permissions as $permission) {
            Permission::upsert(
                [
                    [
                        'name' => $permission,
                    ],
                ],
                ['name']
            );
        }

        $admin_permissions = Permission::all();

        $admin_role->permissions()->sync($admin_permissions->pluck('id')->toArray());

    }
}
