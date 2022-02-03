<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Admin Seeder*/
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class
        ]);
    }
}
