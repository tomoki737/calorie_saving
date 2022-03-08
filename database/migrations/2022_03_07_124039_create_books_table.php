<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('question_id');
            $table->string('google_books_id', 100);
            $table->string('isbn_13', 100)->nullable();
            $table->string('title', 255);
            $table->string('authors', 255)->nullable();
            $table->string('thumnail_url', 1000)->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
            $table->foreign('question_id')
                ->references('question_id')
                ->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
