<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

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
        $admin_role = Role::whereName('Admin')->first();
    }
}
