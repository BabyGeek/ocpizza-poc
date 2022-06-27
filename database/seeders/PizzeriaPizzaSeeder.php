<?php

namespace Database\Seeders;

use App\Models\PizzeriaPizza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzeriaPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PizzeriaPizza::factory()
            ->count(12)
            ->create();
    }
}
