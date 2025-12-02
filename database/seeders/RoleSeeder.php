<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $roleUser = Role::firstOrCreate(['name' => 'user']);

        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Adminstrator',
                'password' => Hash::make('password')
            ]
        );
        $admin->assignRole($roleAdmin);

        $user = User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password'),
            ]
        );
    }
}
