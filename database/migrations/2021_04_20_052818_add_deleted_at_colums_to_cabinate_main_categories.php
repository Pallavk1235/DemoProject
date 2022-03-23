<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtColumsToCabinateMainCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabinate_main_categories', function (Blueprint $table) {
            //
            $table->tinyInteger('deleted_at')->default(0)->after('cabinate_main_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabinate_main_categories', function (Blueprint $table) {
            //
        });
    }
}
