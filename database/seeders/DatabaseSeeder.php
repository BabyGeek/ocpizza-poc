<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlimentSeeder::class,
            PizzaSeeder::class,
            AddressSeeder::class,
            PayementSeeder::class,
            OrderSeeder::class,
            InvoiceSeeder::class,
            PizzeriaPizzaSeeder::class,
            PizzeriaAlimentSeeder::class,
            PizzaAlimentSeeder::class,
            OrderPizzaSeeder::class,
        ]);
    }
}
