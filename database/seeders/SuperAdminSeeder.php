<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Sunday Peter',
            'username' => 'Sunday',
            'email' => 'dammz@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Dammz Tech',
            'username' => 'Dammz',
            'email' => 'sunnex@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'MR C',
            'username' => 'MRC',
            'email' => 'mrc@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
