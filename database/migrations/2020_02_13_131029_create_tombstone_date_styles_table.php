<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstoneDateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstone_date_styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_birth');
            $table->date('date_of_die');
            $table->unsignedBigInteger('fonts_id');
            $table->boolean('bold')->default(false);
            $table->boolean('italics')->default(false);
            $table->unsignedBigInteger('position_id');
            $table->decimal('price');

            $table->foreign('fonts_id')->references('id')->on('fonts');
            $table->foreign('position_id')->references('id')->on('tombstone_date_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tombstone_date_styles');
    }
}
