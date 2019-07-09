<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meaning_id');
            $table->string('word');
            $table->tinyInteger('difficult_only_for_foreigners');
            $table->tinyInteger('is_always_true_or_always_false');
            $table->tinyInteger('true_or_false');
            $table->integer('qty_questions_true');
            $table->integer('qty_questions_false');
            $table->timestamps();

            $table->foreign('meaning_id')->references('id')->on('meanings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}
