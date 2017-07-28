<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_tests', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('class_id')->nullable();
            $table->string('name')->nullable();
            $table->text('content')->nullable();
            $table->text('files')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->text('note')->nullable();
            $table->integer('type')->nullable();
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
        Schema::dropIfExists('content_tests');
    }
}
