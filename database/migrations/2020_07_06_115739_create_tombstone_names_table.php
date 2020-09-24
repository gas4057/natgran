<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstoneNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstone_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_left')->nullable();
            $table->string('name_right')->nullable();
            $table->unsignedBigInteger('name_color_id');
            $table->unsignedBigInteger('order_id')->nullable();

            $table->foreign('name_color_id')->references('id')->on('tombstone_text_colors');
            $table->foreign('order_id')->references('id')->on('orders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tombstone_names');
    }
}
