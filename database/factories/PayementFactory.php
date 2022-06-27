<?php

namespace Database\Factories;

use App\Enums\PayementState;
use App\Enums\PayementType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payement>
 */
class PayementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 38),
            'type' => PayementType::asArray()[array_rand(PayementType::asArray())],
            'state' => PayementState::asArray()[array_rand(PayementState::asArray())],
        ];
    }
}
