<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '+31639888442',
            'password' => Hash::make('admin')
        ]);
        /*
        $chiefMachinist = User::create([
            'name' => 'Chief Machinist',
            'email' => 'chief_machinist@gmail.com',
            'phone' => '+31639888442',
            'password' => Hash::make('chief')
        ]);

        $firstEngineer = User::create([
            'name' => 'First Engineer',
            'email' => 'first_engineer@gmail.com',
            'phone' => '+31639888442',
            'password' => Hash::make('chief')
        ]);

        $secondEngineer = User::create([
            'name' => 'Second Engineer',
            'email' => 'second_engineer@gmail.com',
            'phone' => '+31639888442',
            'password' => Hash::make('chief')
        ]);
        */

        $user = User::find(1);
        $user->assignRole('admin');

        $user = User::find(1);

        if ($user->hasRole('admin')) {
            // something
        }

        if ($user->can('view users')) {
            // something
        }
    }
}

