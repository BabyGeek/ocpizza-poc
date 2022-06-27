<?php

use App\Models\Aliment;
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
        Schema::create('pizzeria_aliments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pizzeria::class);
            $table->foreignIdFor(Aliment::class);
            $table->decimal('amount', 10);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('aliment_id')->references('id')->on('aliments');
            $table->foreign('pizzeria_id')->references('id')->on('pizzerias');
            $table->unique(['pizzeria_id', 'aliment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzeria_aliments');
    }
};
