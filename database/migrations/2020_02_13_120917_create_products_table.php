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
            $table->unsignedBigInteger('material_id')->nullable();
            $table->unsignedBigInteger('subtype_id')->nullable();
            $table->decimal('actual_price');
            $table->decimal('old_price')->nullable();
            $table->decimal('saving')->default(0);;
            $table->string('name');
            $table->string('info');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('specifications')->nullable();
            $table->string('product_code')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('warranty')->nullable();
            $table->string('storage')->nullable();
            $table->integer('popularity')->default(1);
            $table->boolean('is_promotional')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('product_types');
            $table->foreign('material_id')->references('id')->on('product_materials');
            $table->foreign('subtype_id')->references('id')->on('product_subtypes');
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
