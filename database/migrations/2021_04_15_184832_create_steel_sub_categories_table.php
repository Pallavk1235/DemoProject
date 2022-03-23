<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteelSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steel_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->biginteger('steel_main_id')->nullable();
            $table->string('steel_sub_name');
            $table->string('steel_sub_details');
            $table->integer('steel_sub_stock');
            $table->decimal('steel_sub_price',7,4);
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
        Schema::dropIfExists('steel_sub_categories');
    }
}
