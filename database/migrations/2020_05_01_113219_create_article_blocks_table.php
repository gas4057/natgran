<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('article_id')->nullable();
            $table->longText('text_block')->nullable();
            $table->string('image_1')->nullable();
            $table->longText('caption_1')->nullable();
            $table->string('image_2')->nullable();
            $table->longText('caption_2')->nullable();
            $table->string('title')->nullable();
            $table->longText('caption_text')->nullable();
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_blocks');
    }
}
