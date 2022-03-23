<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenchtopParentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benchtop_parent_categories', function (Blueprint $table) {
            $table->id();
            $table->biginteger('benchtop_type_id')->nullable();
            $table->string('benchtop_parent_name');
            $table->string('benchtop_parent_details');
            $table->integer('benchtop_parent_stock');
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
        Schema::dropIfExists('benchtop_parent_categories');
    }
}
