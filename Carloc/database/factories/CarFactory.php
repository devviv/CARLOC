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
            'Description' => fake()->paragraph,
            'date_creation' => fake()->date,
            'prix_par_jour' => fake()->numberBetween(10000, 50000),
            'quantite' => fake()->numberBetween(0, 5),
            'nbre_passagers' => fake()->numberBetween(2, 4),
            'vitesse' => fake()->numberBetween(100, 300),
            'plaque' => fake()->numberBetween(1000, 9999),
            'img_path' => 'cars/car-1.jpg',
            'numero_chassis' => fake()->unique()->numberBetween(100000, 999999),
            'climatisation' => fake()->boolean(90), // 90% de chance d'être disponible
            'disponible' => fake()->boolean(90), // 90% de chance d'être disponible
        ];
    }
}
