<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_buku'   => $this->faker->sentence(3),
            'nama_pengarang'  => $this->faker->name(),
            'id_kategori' => kategori::query()->inRandomOrder()->value('id'), 
            'deskripsi'   => $this->faker->paragraph(),
            'tgl_publish' => $this->faker->date(),
        ];
    }
}
