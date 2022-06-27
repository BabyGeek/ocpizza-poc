<?php

use App\Models\Aliment;
use App\Models\Pizza;
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
        Schema::create('pizza_aliments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pizza::class);
            $table->foreignIdFor(Aliment::class);
            $table->foreign('aliment_id')->references('id')->on('aliments');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->unique(['pizza_id', 'aliment_id']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_aliments');
    }
};
