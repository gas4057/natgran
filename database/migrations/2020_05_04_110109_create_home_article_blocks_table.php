<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeArticleBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_article_blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('home_article_id');
            $table->string('title')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('text_block')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('home_article_id')->references('id')->on('home_articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_article_blocks');
    }
}
