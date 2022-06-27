<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pizzeria;
use App\Enums\AddressType;
use App\Models\Addressable;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++)
        {
            Addressable::factory()->count(4)->for(
                User::factory(), 'addressable'
            )->create([
                'type' => AddressType::asArray()[array_rand(AddressType::asArray())],
                'is_default' => array_rand([true, false])
            ]);
        }

        for($i = 0; $i < 6; $i++)
        {
            Addressable::factory()->count(1)->for(
                Pizzeria::factory(), 'addressable'
            )->create([
                'type' => AddressType::LOCATION,
            ]);
        }
    }
}
