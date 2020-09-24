<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->unsignedBigInteger('product_subtype_id')->nullable();
            $table->string('stella')->nullable();
            $table->string('tombstones')->nullable();
            $table->string('pedestals')->nullable();
            $table->string('parterres')->nullable();
            $table->string('tombstones_vertical_right')->nullable();
            $table->string('tombstones_vertical_left')->nullable();
            $table->string('parterres_vertical_right')->nullable();
            $table->string('parterres_vertical_left')->nullable();
            $table->string('stella_mtl')->nullable();
            $table->string('tombstones_mtl')->nullable();
            $table->string('pedestals_mtl')->nullable();
            $table->string('parterres_mtl')->nullable();
            $table->string('tombstones_vertical_right_mtl')->nullable();
            $table->string('tombstones_vertical_left_mtl')->nullable();
            $table->string('parterres_vertical_right_mtl')->nullable();
            $table->string('parterres_vertical_left_mtl')->nullable();


            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('product_subtype_id')->references('id')->on('product_subtypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('object_models');
    }
}
