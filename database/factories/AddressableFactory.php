<?php

namespace Database\Factories;

use App\Enums\AddressType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addressable>
 */
class AddressableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'label' => $this->faker->text(12),
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'country' => $this->faker->countryCode(),
            'zip_code' => $this->faker->postcode(),
            'is_default' => false,
        ];
    }
}
