<?php

namespace Database\Factories;

use App\Enums\OrderState;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $deliveryID = array_rand([0, random_int(20, 50), random_int(20, 50), random_int(20, 50)]);

        if($deliveryID)
        {
            return [
                'user_id' => random_int(1, 20),
                'pizzeria_id' => random_int(1, 6),
                'delivery_man_id' => $deliveryID,
                'state' => OrderState::asArray()[array_rand(OrderState::asArray())],
            ];
        }
        return [
            'user_id' => random_int(1, 20),
            'pizzeria_id' => random_int(1, 6),
            'state' => OrderState::asArray()[array_rand(OrderState::asArray())],
        ];
    }
}
