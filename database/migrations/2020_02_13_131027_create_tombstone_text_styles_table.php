<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstoneTextStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstone_text_styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->unsignedBigInteger('fonts_id');
            $table->unsignedBigInteger('position_id');
            $table->boolean('bold')->default(false);
            $table->boolean('italics')->default(false);

            $table->foreign('fonts_id')->references('id')->on('fonts');
            $table->foreign('position_id')->references('id')->on('tombstone_text_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tombstone_text_styles');
    }
}
