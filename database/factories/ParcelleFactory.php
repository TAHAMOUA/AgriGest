<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParcelleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => fake()->word(),

            'culture' => fake()->randomElement([
                'Blé',
                'Maïs',
                'Tomate',
                'Olivier',
                'Pomme de terre',
            ]),

            'superficie' => fake()->randomFloat(2, 1, 50),

            'date_plantation' => fake()->date(),

            'statut' => fake()->randomElement([
                'En cours',
                'Récoltée',
            ]),
        ];
    }
}