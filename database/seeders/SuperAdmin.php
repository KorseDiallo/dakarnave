<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom' => 'admin',
            'prenom' => 'admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('@zerty123'),
            'role' => 'superAdmin',
            'telephone' => 770000000
        ]);
    }
}
