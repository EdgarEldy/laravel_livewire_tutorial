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
        ];
    }
}
