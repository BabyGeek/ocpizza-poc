<?php

namespace Database\Seeders;

use App\Models\Payement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payement::factory()
            ->count(32)
            ->create();
    }
}
