<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_features', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('heading');
            $table->string('paragraph');
            $table->string('point1');
            $table->string('point2');
            $table->string('point3');
            $table->string('point4');
            $table->string('image');
            $table->string('status');
            $table->string('link');
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
        Schema::dropIfExists('service_features');
    }
}
