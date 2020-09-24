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
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('engraving_id')->nullable();
            $table->unsignedBigInteger('medallion_id')->nullable();
            $table->unsignedBigInteger('parterres_id')->nullable();
            $table->unsignedBigInteger('pedestals_id')->nullable();
            $table->unsignedBigInteger('tombstones_id')->nullable();
            $table->unsignedBigInteger('stella_id')->nullable();
            $table->decimal('price');
            $table->integer('count_product')->default(1);
            $table->timestamps();


            $table->foreign('engraving_id')->references('id')->on('engraving_portraits');
            $table->foreign('medallion_id')->references('id')->on('medallions');
            $table->foreign('client_id')->references('id')->on('client_orders');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('stella_id')->references('id')->on('modifiers');
            $table->foreign('parterres_id')->references('id')->on('modifiers');
            $table->foreign('pedestals_id')->references('id')->on('modifiers');
            $table->foreign('tombstones_id')->references('id')->on('modifiers');
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
