<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createRole();

        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);

        if ( $adminUser ) {
            $adminUser->assignRole(User::ROLE_ADMIN);
        }

        User::factory(5)->create();        
    }

    private function createRole(): void
    {
        Role::create([ 'name' => User::ROLE_ADMIN ]);
        Role::create([ 'name' => User::ROLE_USER ]);
    }
}
