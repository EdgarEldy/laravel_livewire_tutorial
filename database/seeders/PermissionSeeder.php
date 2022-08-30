<?php

namespace Database\Seeders;

use App\Models\Permission;
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
        ];
    }
}
