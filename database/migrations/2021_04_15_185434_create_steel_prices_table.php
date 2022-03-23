<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteelPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steel_prices', function (Blueprint $table) {
            $table->id();
            $table->biginteger('steel_main_id');
            $table->biginteger('steel_sub_id')->nullable();
            $table->decimal('steel_final_price',7,4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steel_prices');
    }
}
