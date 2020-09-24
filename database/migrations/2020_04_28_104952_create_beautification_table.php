<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeautificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beautification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->decimal('price')->nullable();
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('product_subtype_id');

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
        Schema::dropIfExists('beautification');
    }
}
