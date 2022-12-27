<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'ADMIN']);

        Role::firstOrCreate(['name' => 'MANAGER']);

        Role::firstOrCreate(['name' => 'STAFF']);

        Role::firstOrCreate(['name' => 'USER']);
    }
}
