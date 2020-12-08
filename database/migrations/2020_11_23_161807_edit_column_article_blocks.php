<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnArticleBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_questions', function (Blueprint $table) {
            $table->string('first_name')->nullable()->change();
            $table->string('contact_phone')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_questions', function (Blueprint $table) {
            $table->string('first_name')->change();
            $table->string('contact_phone')->change();
        });
    }
}
