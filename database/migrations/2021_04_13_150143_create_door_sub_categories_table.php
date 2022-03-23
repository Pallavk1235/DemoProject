<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoorSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('door_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->biginteger('door_parent_id')->nullable();
            $table->string('door_sub_name');
            $table->string('door_sub_details');
            $table->integer('door_sub_stock');
            // $table->integer('door_sub_price');
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
        Schema::dropIfExists('door_sub_categories');
    }
}
