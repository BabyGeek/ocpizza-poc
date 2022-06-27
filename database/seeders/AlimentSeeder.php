<?php

namespace Database\Seeders;

use App\Models\Aliment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aliment::factory()
            ->count(50)
            ->create();
    }
}
