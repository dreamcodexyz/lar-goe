<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->decimal('qty', 15, 2)->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->integer('invoice')->nullable();
            $table->integer('store_id')->nullable();
            $table->text('note')->nullable();
            $table->integer('is_actived')->nullable()->default(1);
            $table->integer('type')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
