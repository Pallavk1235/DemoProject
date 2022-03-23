<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoorPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('door_prices', function (Blueprint $table) {
            $table->id();
            $table->biginteger('door_maincategoty_id');
            $table->biginteger('door_subcategoty_id');
            $table->biginteger('door_finshing_id');
            $table->biginteger('door_color_id');
            $table->biginteger('door_material_id');
            $table->decimal('door_price',7,4);
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
        Schema::dropIfExists('door_prices');
    }
}
