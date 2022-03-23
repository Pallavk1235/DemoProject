<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlassChildCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glass_child_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('glass_parent_id')->nullable();
            // $table->string('glass_parent_name')->nullable();
            $table->string('glass_child_name');
            $table->string('glass_child_details');
            $table->integer('glass_child_stock');
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
        Schema::dropIfExists('glass_child_categories');
    }
}
