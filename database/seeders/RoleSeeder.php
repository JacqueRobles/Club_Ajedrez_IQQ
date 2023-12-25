<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role1 = Role::create(['name' => 'Directive']);
        $role2 = Role::create(['name' => 'Director']);
        $role3 = Role::create(['name' => 'Pupil']);
        $role4 = Role::create(['name' => 'Partner']);
        $role5 = Role::create(['name' => 'Player']);


    }
}
