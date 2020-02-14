<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderEpitaphTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_epitaph_texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->unsignedBigInteger('fonts_id');
            $table->unsignedBigInteger('position_id');
            $table->boolean('bold')->default(false);
            $table->boolean('italics')->default(false);
            $table->boolean('is_copyright_text')->default(false);
            $table->timestamps();

            $table->foreign('fonts_id')->references('id')->on('fonts');
            $table->foreign('position_id')->references('id')->on('epitaph_text_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_epitaph_texts');
    }
}
