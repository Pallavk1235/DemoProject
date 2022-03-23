<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories_subs', function (Blueprint $table) {
            $table->id();
            $table->biginteger('accessories_main_id')->nullable();
            $table->string('accessories_sub_name');
            $table->string('accessories_sub_details');
            $table->integer('accessories_sub_stock');
            $table->decimal('accessories_sub_price',7,4);
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
        Schema::dropIfExists('accessories_subs');
    }
}
