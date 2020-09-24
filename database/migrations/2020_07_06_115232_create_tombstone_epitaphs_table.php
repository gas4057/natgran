<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstoneEpitaphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstone_epitaphs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('on_pedestal_epitaph')->nullable();
            $table->string('left_epitaph')->nullable();
            $table->string('right_epitaph')->nullable();
            $table->unsignedBigInteger('epitaph_color_id');
            $table->unsignedBigInteger('order_id')->nullable();

            $table->foreign('epitaph_color_id')->references('id')->on('tombstone_text_colors');
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
        Schema::dropIfExists('tombstone_epitaphs');
    }
}
