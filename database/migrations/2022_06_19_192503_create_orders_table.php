<?php

use App\Models\User;
use App\Models\Pizzeria;
use App\Enums\OrderState;
use App\Models\Invoice;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Pizzeria::class);
            $table->unsignedBigInteger('delivery_man_id')->nullable();
            $table->integer('state')->default(OrderState::PENDING);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('delivery_man_id')->references('id')->on('users');
            $table->foreign('pizzeria_id')->references('id')->on('pizzerias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
