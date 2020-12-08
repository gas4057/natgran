<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnArticleBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_blocks', function (Blueprint $table) {
            $table->longText('title')->nullable()->change();
            $table->longText('caption_3')->nullable();
            $table->string('image_3')->nullable();
            $table->string('block_image_1')->nullable();
            $table->string('block_image_2')->nullable();
            $table->string('block_image_3')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_blocks', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->dropColumn(['block_image_1', 'block_image_2', 'block_image_3', 'image_3', 'caption_3']);
        });
    }
}
