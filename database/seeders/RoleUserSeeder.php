<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::factory()->create([
            "name" => "Super Admin",
            "email" => "superadmin@farmbox.com",
        ]);
        $userAcc = User::factory()->create([
            "name" => "Test User",
            "email" => "test@example.com",
        ]);
        // Create role
        $superadmin = Role::create(["name" => "superadmin"]);
        $user = Role::create(["name" => "user"]);

        // Assign role to user
        $superAdmin->assignRole($superadmin);
        $userAcc->assignRole($user);
    }
}
