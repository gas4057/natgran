<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('article_type_id')->nullable();
            $table->string('key')->nullable()->unique();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('short_desc')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('article_type_id')->references('id')->on('article_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
