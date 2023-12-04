<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paiement>
 */
class PaiementFactory extends Factory
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
        'reservation_id' => function () {
            return Reservation::inRandomOrder()->first()->id;
        },
        'remise' => fake()->numberBetween(0, 100),
        'etat' => fake()->boolean,
    ];
    }
}
