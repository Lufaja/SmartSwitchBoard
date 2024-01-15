<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chiefMachinist = Role::create(['name' => 'chief machinist']);
        $firstEngineer = Role::create(['name' => 'first engineer']);
        $secondEngineer = Role::create(['name' => 'second engineer']);

        $chiefMachinist->givePermissionTo('all', 'admin');
        $firstEngineer->givePermissionTo('all', 'admin');
        $secondEngineer->givePermissionTo('view users');  
    }
}
