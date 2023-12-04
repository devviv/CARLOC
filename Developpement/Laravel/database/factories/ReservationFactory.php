<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
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
        'payé' => fake()->boolean,
        'date_retour' => fake()->date,
    ];
    }
}
