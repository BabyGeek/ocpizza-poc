<?php

use App\Enums\AddressType;
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
        Schema::create('addressables', function (Blueprint $table) {
            $table->id();
            $table->morphs('addressable');  
            $table->string("label");
            $table->string("street");
            $table->string("city");
            $table->string("zip_code");
            $table->string("country");
            $table->integer("type")->default(AddressType::BILLING_AND_DELIVERY);      
            $table->boolean("is_default");      
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
        Schema::dropIfExists('addressables');
    }
};
