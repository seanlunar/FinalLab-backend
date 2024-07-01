<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $roleone = Role::create(['name' => 'teacher']);
        $roletwo = Role::create(['name' => 'student']);
        $role3 = Role::create(['name' => 'parent']);



        $user = User::create([
          'name' => 'DMI-UNIVERSITY',
          'email_verified_at' => Carbon::now(),
          'email' => 'admin@dmi.com',
          'password' => bcrypt('password'),

        ]);
        $user->assignRole($role);
    }
}
