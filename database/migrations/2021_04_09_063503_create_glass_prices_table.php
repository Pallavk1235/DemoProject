<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlassPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glass_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('glass_parent_category_id');
            $table->bigInteger('glass_child_id')->nullable();
            $table->bigInteger('glass_height_width_id');
            $table->bigInteger('glass_material_id')->nullable();
            // $table->string('glass_parent_name');
            // $table->string('glass_parent_details');
            // $table->string('glass_child_name')->nullable();
            // $table->string('glass_child_details')->nullable();
            // $table->string('glass_material_name')->nullable();
            // $table->string('glass_material_details')->nullable();
            // $table->integer('glass_parent_category_stock');
            // $table->integer('glass_child_category_stock')->nullable();
            $table->decimal('glass_price',7,4);    
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
        Schema::dropIfExists('glass_prices');
    }
}
