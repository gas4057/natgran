<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstoneDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstone_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('left_date_of_birth')->nullable();
            $table->date('left_date_of_die')->nullable();
            $table->date('right_date_of_birth')->nullable();
            $table->date('right_date_of_die')->nullable();
            $table->unsignedBigInteger('dates_color_id');
            $table->unsignedBigInteger('order_id')->nullable();

            $table->foreign('dates_color_id')->references('id')->on('tombstone_text_colors');
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
        Schema::dropIfExists('tombstone_dates');
    }
}
