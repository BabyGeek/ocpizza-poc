<?php

use App\Models\Order;
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
        Schema::create('order_pizzas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Order::class);
            $table->foreignIdFor(Pizza::class);
            $table->decimal('price', 10);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pizzas');
    }
};
