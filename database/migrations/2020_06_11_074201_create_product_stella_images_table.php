<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStellaImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stella_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('left_stella_image_id')->nullable();
            $table->unsignedBigInteger('right_stella_image_id')->nullable();
            $table->unsignedBigInteger('left_stella_color_id')->nullable();
            $table->unsignedBigInteger('right_stella_color_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();

            $table->foreign('left_stella_image_id')->references('id')->on('stella_images');
            $table->foreign('right_stella_image_id')->references('id')->on('stella_images');
            $table->foreign('left_stella_color_id')->references('id')->on('tombstone_text_colors');
            $table->foreign('right_stella_color_id')->references('id')->on('tombstone_text_colors');
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
        Schema::dropIfExists('product_stella_images');
    }
}
