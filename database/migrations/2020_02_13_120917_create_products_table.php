<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('material_id');
            $table->decimal('actual_price');
            $table->decimal('old_price');
            $table->string('name');
            $table->string('info');
            $table->integer('image');
            $table->integer('description');
            $table->integer('specifications');
            $table->integer('product_code');
            $table->integer('size');
            $table->integer('weight');
            $table->integer('warranty');
            $table->integer('storage');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('product_types');
            $table->foreign('material_id')->references('id')->on('product_materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
