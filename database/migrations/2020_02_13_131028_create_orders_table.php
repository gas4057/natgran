<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->boolean('engraving')->default(false);
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('parterre_id');
            $table->unsignedBigInteger('pedestal_id');
            $table->unsignedBigInteger('tombstone_id');
            $table->unsignedBigInteger('stella_id');
            $table->unsignedBigInteger('epitaph_id');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('contact_message')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('parterre_id')->references('id')->on('partteres');
            $table->foreign('pedestal_id')->references('id')->on('pedestals');
            $table->foreign('tombstone_id')->references('id')->on('tombstones');
            $table->foreign('stella_id')->references('id')->on('stellas');
            $table->foreign('epitaph_id')->references('id')->on('order_epitaph_texts');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
