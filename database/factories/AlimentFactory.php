<?php

namespace Database\Factories;

use App\Providers\AlimentsProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aliment>
 */
class AlimentFactory extends Factory
{    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new AlimentsProvider($this->faker));

        return [
            'label' => $this->faker->unique()->foodName(),
            'description' => $this->faker->text(),
        ];
    }
}
