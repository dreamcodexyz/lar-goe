<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consult_id')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->integer('document_id')->nullable();
            $table->integer('lesson_id')->nullable();
            $table->integer('content_test_id')->nullable();
            $table->integer('learn_process_id')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
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
        Schema::dropIfExists('academies');
    }
}
