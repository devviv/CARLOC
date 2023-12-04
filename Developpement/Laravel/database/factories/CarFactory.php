<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Car;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nom' => fake()->word,
            'Modele' => fake()->word,
            'date_creation' => fake()->date,
            'prix' => fake()->numberBetween(10000, 50000),
            'vitesse' => fake()->numberBetween(100, 300),
            'plaque' => fake()->numberBetween(1000, 9999),
            'img_path' => 'public/cars/img1.png',
            'numero_chassis' => fake()->unique()->numberBetween(100000, 999999),
            'disponible' => fake()->boolean(90), // 90% de chance d'être disponible
        ];
    }
}
