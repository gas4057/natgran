<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstoneTextColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstone_text_colors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color');
            $table->decimal('price');
            $table->decimal('stella_price')->nullable();
            $table->decimal('tombstone_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tombstone_text_colors');
    }
}
