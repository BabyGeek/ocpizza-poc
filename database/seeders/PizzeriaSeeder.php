<?php

namespace Database\Seeders;

use App\Models\Pizzeria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizzeria::factory()
            ->count(6)
            ->create();
    }
}
