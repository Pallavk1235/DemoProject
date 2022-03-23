<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtColumsToCabinateTypeCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabinate_type_categories', function (Blueprint $table) {
            //
            $table->tinyInteger('deleted_at', 0)->default(0)->after('cabinate_type_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabinate_type_categories', function (Blueprint $table) {
            //
        });
    }
}
