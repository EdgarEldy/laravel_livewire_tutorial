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
            // categories
            'Create a category',
            'Show categories',
            'Show category details',
            'Update a category',
            'Remove a category',

            // Products
            'Create a product',
            'Show products',
            'Show product details',
            'Update a product',
            'Remove a product',

            // Customers
            'Create a customer',
            'Show customers',
            'Show customer details',
            'Update a customer',
            'Remove a customer',

            // Orders
            'Create an order',
            'Show orders',
            'Shown order details',
            'Update an order',
            'Remove an order',

            // Roles
            'Create a role',
            'Show roles',
            'Show role details',
            'Update a role',
            'Remove a role',

            // Users
            'Create a user',
            'Show users',
            'Show user details',
            'Update a user',
            'Remove a user',
        ];

        // Save admin role to the database
        Role::upsert(
            [
                [
                    'role_name' => 'Admin'
                ]
            ],
            ['role_name']
        );

        // Get admin role
        $admin_role = Role::whereRoleName('Admin')->first();

        // Save users to the database
        User::upsert(
            [
                [
                    'first_name' => 'Admin',
                    'last_name' => 'Admin',
                    'tel' => '77777777',
                    'email' => 'admin@admin.com',
                    'address' => 'Kajaga',
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],
                [
                    'first_name' => 'User',
                    'last_name' => 'User',
                    'tel' => '44444444',
                    'email' => 'user@user.com',
                    'address' => 'Kamenge',
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],

            ],
            ['email'],
        );

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
