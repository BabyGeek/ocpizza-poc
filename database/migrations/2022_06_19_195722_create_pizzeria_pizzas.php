<?php

use App\Models\Pizza;
use App\Models\Pizzeria;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzeria_pizzas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pizza::class);
            $table->foreignIdFor(Pizzeria::class);
            $table->decimal('price', 10);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pizzeria_id')->references('id')->on('pizzerias');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->unique(['pizzeria_id', 'pizza_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzeria_pizzas');
    }
};
