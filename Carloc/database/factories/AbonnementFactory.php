<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonnement>
 */
class AbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'car_id' => function () {
                return Car::inRandomOrder()->first()->id;
            },
            'nbre_jour' => fake()->numberBetween(1, 50),
            'prix' => fake()->numberBetween(100, 50000),
            'date_retout' => fake()->date(),
        ];
    }
}
