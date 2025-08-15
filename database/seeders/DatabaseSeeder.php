<?php

namespace Database\Seeders;

use App\Models\buku;
use App\Models\User;
use App\Models\rating;
use App\Models\kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->admin() 
            ->create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'), 
            ]);


        User::factory()
            ->count(5)
            ->create();

        kategori::factory(3000)->create();
        buku::factory(100000)->create();
        rating::factory(500000)->create();
    }
}
