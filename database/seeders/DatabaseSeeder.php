<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::factory()->create([
            'name' => 'Admin',
        ]);

        Role::factory()->create([
            'name' => 'Editor',
        ]);

        Role::factory()->create([
            'name' => 'User',
        ]);



     User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password'=>'1234',
            // 'is_admin'=>true 
            'role_id'=>1,
        ]);

     User::factory()->create([
            'name' => 'editor',
            'email' => 'editor@example.com',
            'password'=>'1234',
            'role_id'=>2,
        ]);

        
     User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password'=>'1234',
            'role_id'=>3,
        ]);



        $this->call(
            TaskSeeder::class
        );
    }
}
