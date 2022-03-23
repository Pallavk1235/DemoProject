<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlassHeightWidthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glass_height_widths', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('glass_parent_id')->nullable();
            // $table->bigInteger('glass_child_id')->nullable();
            $table->integer('glass_height');
            $table->integer('glass_width');
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
        Schema::dropIfExists('glass_height_widths');
    }
}
