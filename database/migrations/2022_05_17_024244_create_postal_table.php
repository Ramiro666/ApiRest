<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal', function (Blueprint $table) {
            $table->id();
            $table->string('zip_code', 45);
            $table->string('locality', 100);
            $table->integer('settlements_id')->unsigned();
            $table->foreign('settlements_id')->references('id')->on('settlements');
            $table->integer('federal_entity_id')->unsigned();
            $table->foreign('federal_entity_id')->references('id')->on('federal_entity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postal');
    }
}
