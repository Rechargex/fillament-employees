<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\Role as ModelsRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        $user2 = User::factory()->create([
            'name' => 'Writer',
            'email' => 'writer@example.com',
        ]);
        $user3 = User::factory()->create([
            'name' => 'Moderator',
            'email' => 'moderator@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
        ]);
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Writer']);
        $role3 = Role::create(['name' => 'Moderator']);
        $user1->assignRole($role1);
        $user2->assignRole($role2);
        $user3->assignRole($role3);

        



        // Department::factory(10)->create();
    }
}
