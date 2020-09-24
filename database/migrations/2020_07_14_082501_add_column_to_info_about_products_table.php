<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToInfoAboutProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_about_products', function (Blueprint $table) {
            $table->string('payment')->nullable();
            $table->string('delivery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_about_products', function (Blueprint $table) {
            $table->dropColumn('payment');
            $table->dropColumn('delivery');
        });
    }
}
