<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'user_id' => 1,
                'username' => 'john_doe',
                'password' => Hash::make('password123'),
                'personable' => 'John Doe',
                'role' => 'Student'
            ],
            [
                'user_id' => 2,
                'username' => 'jane_smith',
                'password' => Hash::make('password123'),
                'personable' => 'Jane Smith',
                'role' => 'Student'
            ],
            // Anda dapat menambahkan lebih banyak data di sini
        ];

        // Masukkan data ke tabel users
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
