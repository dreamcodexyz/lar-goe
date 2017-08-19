<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->text('image')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->string('school')->nullable();
            $table->string('facebook')->nullable();
            $table->integer('parent_id')->nullable();
            $table->text('note')->nullable();
            $table->text('parent_hope')->nullable();
            $table->integer('history_learn_english')->nullable();
            $table->integer('reference_from')->nullable();
            $table->integer('program_id')->nullable();
            $table->integer('status')->nullable();
            $table->integer('store_id')->nullable();
            $table->tinyInteger('gender')->nullable()->default(1);
            $table->tinyInteger('is_actived')->nullable()->default(1);
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
        Schema::dropIfExists('customers');
    }
}
