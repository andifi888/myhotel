<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
          'manage countries',
            'manage city',
            'manage hotel',
            'manage hotel bookings',
            'manage hotel',
            'checkout hotels',
            'view hotel bookings'
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate([
                'name'=>$perm
            ]);
        }

        $customerRole = Role::firstOrCreate([
            'name'=>'customer'
        ]);

        $customerPermissions = [
            'checkout hotels',
            'view hotel bookings',
        ];

        $customerRole->syncPermissions($customerPermissions);

        $superAdminRole = Role::firstOrCreate([
            'name'=>'super_admin'
        ]);

        $user = User::create([
            'name'=>'Super Admin',
            'email'=>'super@admin.com',
            'avatar'=>'images/dummyavatar.png',
            'password'=>bcrypt('admin123')
        ]);

        $user->assignRole($superAdminRole);
    }
}
