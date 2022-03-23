<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtColumsToCabinateSubtypeCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabinate_subtype_categories', function (Blueprint $table) {
            //
            $table->string('code', 255)->nullable()->after('cabinate_subtype_name');
            $table->longText('description')->nullable()->after('code');
            $table->string('height', 255)->nullable()->after('description');
            $table->string('width', 255)->nullable()->after('height');
            $table->string('depth', 255)->nullable()->after('width');
            $table->float('price')->nullable()->after('depth');
            $table->tinyInteger('deleted_at')->default(0)->after('price');
            //             Unit code
            // Description
// Height
// WIDTH
// DEPTH
// Unit price
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabinate_subtype_categories', function (Blueprint $table) {
            //
        });
    }
}
