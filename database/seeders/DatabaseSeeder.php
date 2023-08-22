<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Enrolments;
use App\Models\Faculty;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Roles::truncate();
        User::truncate();

        $default_roles = ["admin","faculty","student","secretary","department_head"];

        foreach($default_roles as $role){
            Roles::factory()->create([
                "name" => $role
            ]);
        }

        //create an admin
        User::factory()->create([
            "email" => "admin@example.com",
            "username" => "admin",
            "role_id" => 1
        ]);

        //enrol some students
        // Enrolments::factory(rand(2,10))->create();

        //add some faculties
        // Faculty::factory(rand(1,3))->create();

        // User::factory(5)->

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
