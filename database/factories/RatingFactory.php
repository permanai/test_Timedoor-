<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_buku' => \App\Models\Buku::inRandomOrder()->first()->id ?? \App\Models\Buku::factory(),
            'rating'  => $this->faker->numberBetween(1, 10),
            'komentar' => $this->faker->sentence(),
        ];
    }
}
