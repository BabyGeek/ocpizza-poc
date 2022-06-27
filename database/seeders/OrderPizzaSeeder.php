<?php

namespace Database\Seeders;

use App\Models\OrderPizza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderPizza::factory()
            ->count(12)
            ->create();
    }
}
