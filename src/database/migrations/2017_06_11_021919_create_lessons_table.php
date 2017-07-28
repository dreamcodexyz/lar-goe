<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->text('content')->nullable();
            $table->text('content_test')->nullable();
            $table->text('homework')->nullable();
            $table->text('note')->nullable();
            $table->integer('is_actived')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
