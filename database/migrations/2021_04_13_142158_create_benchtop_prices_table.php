<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenchtopPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benchtop_prices', function (Blueprint $table) {
            $table->id();
            $table->biginteger('bechtop_parent_id');
            $table->biginteger('bechtop_child_id')->nullable();
            $table->biginteger('benchtop_material_id');
            $table->biginteger('benchtop_width_id');
            $table->decimal('benchtop_price',7,4);  
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
        Schema::dropIfExists('benchtop_prices');
    }
}
