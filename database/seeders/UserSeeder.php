<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678'),
        ]);
        
        Mahasiswa::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@email.com',
            'password' => bcrypt('12345678'),
        ]);
        
        Dosen::create([
            'name' => 'dosen',
            'email' => 'dosen@email.com',
            'password' => bcrypt('12345678'),
        ]);
        
    }
}
