<?php

namespace Database\Seeders;

use App\Models\PizzaAliment;
use Illuminate\Database\Seeder;

class PizzaAlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PizzaAliment::factory()
            ->count(20)
            ->create();
    }
}
