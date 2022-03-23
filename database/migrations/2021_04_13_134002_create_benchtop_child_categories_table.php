<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenchtopChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benchtop_child_categories', function (Blueprint $table) {
            $table->id();
            $table->biginteger('benchtop_parent_id')->nullable();
            $table->string('benchtop_child_name');
            $table->string('benchtop_child_details');
            $table->integer('benchtop_child_stock');
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
        Schema::dropIfExists('benchtop_child_categories');
    }
}
