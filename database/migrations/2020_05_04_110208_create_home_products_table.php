<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tab_title');
            $table->unsignedBigInteger('product_id_1');
            $table->unsignedBigInteger('product_id_2');
            $table->unsignedBigInteger('product_id_3');
            $table->string('text_more');
            $table->timestamps();

            $table->foreign('product_id_1')->references('id')->on('products');
            $table->foreign('product_id_2')->references('id')->on('products');
            $table->foreign('product_id_3')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_products');
    }
}
