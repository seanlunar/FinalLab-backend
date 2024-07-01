<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
          'name' => 'Teacher',
          'email_verified_at' => Carbon::now(),
          'email' => 'teacher@dmi.com',
          'password' => bcrypt('password'),

        ]);
        $user->assignRole($roleone);


        $user1 = User::create([

            'name' => 'Admin',
            'email_verified_at' => Carbon::now(),
            'email' => 'admin@dmi.com',
            'password' => bcrypt('password'),

          ]);
          $user1->assignRole($role);

          $user2 = User::create([
            'name' => 'Student',
            'email_verified_at' => Carbon::now(),
            'email' => 'student@dmi.com',
            'password' => bcrypt('password'),

          ]);
          $user2->assignRole($roletwo);

          $user3 = User::create([
            'name' => 'Parent',
            'email_verified_at' => Carbon::now(),
            'email' => 'parent@dmi.com',
            'password' => bcrypt('password'),

          ]);
          $user3->assignRole($role3);


        // DB::table('model_has_roles')->insert([
        //     'model_id' => $user->id,
        //     'model_type' => 'App\Models\User',
        //     'role_id' => 2,
        // ]);

        // $user->assignRole($role);
    }
}
