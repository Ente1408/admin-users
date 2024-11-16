<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // User
            ['title' => 'user_index', 'menu' => 'User', 'permission' => 'See', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'user_add', 'menu' => 'User', 'permission' => 'Add', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'user_edit', 'menu' => 'User', 'permission' => 'Edit', 'created_at' => now(), 'updated_at' => now(),],
            ['title' => 'user_delete', 'menu' => 'User', 'permission' => 'Delete', 'created_at' => now(), 'updated_at' => now(),],
        ];

        Permission::insert($permissions);
    }
}
