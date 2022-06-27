<?php

namespace Database\Seeders;

use App\Models\PizzeriaAliment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzeriaAlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PizzeriaAliment::factory()
            ->count(20)
            ->create();
    }
}
