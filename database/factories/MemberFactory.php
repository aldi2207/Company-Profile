<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->randomNumber(2, false),
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nomor' => fake()->unique()->numerify('08########'),
            'umur' => fake()->numberBetween(18, 70),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'nik' => fake()->numerify('NIK#######')
        ];
    }
}
