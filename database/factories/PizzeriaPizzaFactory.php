<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PizzeriaPizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'pizzeria_id' => random_int(1, 6),
            'pizza_id' => $this->faker->unique()->numberBetween(1, 50),
            'price' => $this->faker->randomFloat(2, 7.99, 19.99),
        ];
    }
}
