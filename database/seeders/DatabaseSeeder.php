<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $datausers = [
            [
                'nama' => 'abah onje',
                'username' => 'admin',
                'email' => 'abahonje78@gmail.com',
                'password' => bcrypt('admin'),
                'status' => 'aktif',
                'level' => 'admin',
            ],
            [
                'nama' => 'Deden Ganteng',
                'username' => 'Pustaka',
                'email' => 'deden78@gmail.com',
                'password' => bcrypt('12345'),
                'status' => 'aktif',
                'level' => 'pustakawan',
            ],
        ];
        foreach ($datausers as $user) {
            User::create($user);
        }
    }
}
