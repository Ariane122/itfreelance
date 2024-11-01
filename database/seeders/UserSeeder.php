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
        $input = [
            'nom' => 'Super',
            'prenom' => 'Admin',
            'telephone' => '96563299',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
        ];
        $user = User::create($input);
    }
}
