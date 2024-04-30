<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhychoosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whychooses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('heading');
            $table->string('paragraph');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('yoexp');
            $table->string('sacustomer');
            $table->string('couwsur');
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
        Schema::dropIfExists('whychooses');
    }
}
