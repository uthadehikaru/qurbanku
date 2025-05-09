<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'type' => $this->faker->randomElement(['sapi', 'kambing', 'domba', 'kerbau']),
            'weight' => $this->faker->numberBetween(9, 999),
            'price' => $this->faker->numberBetween(100000, 99999999),
            'image' => null,
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['available', 'unavailable', 'sold']),
        ];
    }
}
