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

        foreach ($permissions as $permission) {
            // Save permissions
            $permission = Permission::firstOrNew(['permission_name' => $permission]);
            $permission->save();

            // Create sub_permissions array
            $sub_permissions = [
                'View',
                'Create',
                'Update',
                'Delete',
                'Print',
                'Block',
            ];

            // Add sub_permissions to permissions
            foreach ($sub_permissions as $sub_permission) {
                if ($sub_permission == 'Print') {
                    if (in_array($permission->permission_name, [
                        'Category',
                        'Product',
                        'Customer',
                        'Order',
                        'Role',
                        'User',
                        'Permission',
                    ])) {
                        Permission::firstOrCreate([
                            'parent_id' => $permission->id,
                            'permission_name' => $sub_permission
                        ]);
                    }
                } elseif ($sub_permission == 'Block') {
                    if (in_array($permission->permission_name, ['User',])) {
                        Permission::firstOrCreate([
                            'parent_id' => $permission->id,
                            'permission_name' => $sub_permission
                        ]);
                    }
                } else {
                    Permission::firstOrCreate([
                        'parent_id' => $permission->id,
                        'permission_name' => $sub_permission
                    ]);
                }
            }
        }
    }
}
