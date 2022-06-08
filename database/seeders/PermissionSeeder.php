<?php

namespace Database\Seeders;

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
            'Category',
            'Product',
            'Customer',
            'Order',
            'Role',
            'User',
            'Permission',
        ];
    }
}
