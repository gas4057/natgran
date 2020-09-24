<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedallionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medallions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('form_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('material_id');
            $table->decimal('price');

            $table->foreign('form_id')->references('id')->on('medallion_forms');
            $table->foreign('size_id')->references('id')->on('medallion_sizes');
            $table->foreign('material_id')->references('id')->on('medallion_materials');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medallions');
    }
}
