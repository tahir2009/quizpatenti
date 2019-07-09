<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chapter_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('chapter_video_id')->nullable();
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->unsignedBigInteger('content_id')->nullable();
            $table->unsignedBigInteger('question_id')->nullable();
            $table->unsignedBigInteger('word_id')->nullable();
            $table->enum('for', ['chapter', 'section', 'video', 'lesson', 'content', 'question', 'word']);
            $table->enum('status', ['new', 'update', 'delete']);
            $table->timestamps();

            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('set null');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('set null');
            $table->foreign('chapter_video_id')->references('id')->on('chapter_videos')->onDelete('set null');
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('set null');
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('set null');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('set null');
            $table->foreign('word_id')->references('id')->on('words')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_logs');
    }
}
