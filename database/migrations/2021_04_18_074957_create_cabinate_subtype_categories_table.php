<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinateSubtypeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabinate_subtype_categories', function (Blueprint $table) {
            $table->id();
            // $table->biginteger('cabinate_main_id')->nullable();
            $table->biginteger('cabinate_type_id')->nullable();
            $table->string('cabinate_subtype_name');
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
        Schema::dropIfExists('cabinate_subtype_categories');
    }
}
