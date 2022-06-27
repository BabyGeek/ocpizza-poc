<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Pizza;
use App\Models\PizzeriaPizza;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderPizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pizzaID = array_rand(PizzeriaPizza::all()->keyBy('pizza_id')->toArray());
        $orderID = random_int(1, 10);
        $pizzeriaPizza = PizzeriaPizza::where('pizza_id', $pizzaID)->first();

        return [
            'order_id' => $orderID,
            'pizza_id' => $pizzeriaPizza->pizza_id,
            'price' => $pizzeriaPizza->price,
        ];
    }
}
