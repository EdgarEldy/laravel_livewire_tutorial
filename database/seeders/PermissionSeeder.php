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
            'Category',
            'Product',
            'Customer',
            'Order',
            'Role',
            'User',
            'Permission',
        ];

        // Save permissions
        foreach ($permissions as $permission) {
            $permission = Permission::firstOrNew([
                'nom_permission' => $permission
            ]);
            $permission->save();

            // Creating sub permissions
            $sub_permissions = [
                'Create',
                'Read',
                'Update',
                'Delete'
            ];

            // Save sub permissions
            foreach ($sub_permissions as $sub_permission) {
                Permission::firstOrCreate([
                    'parent_id' => $permission->id,
                    'permission_name' => $sub_permission
                ]);
            }
        }
    }
}
