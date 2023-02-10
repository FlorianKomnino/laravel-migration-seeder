<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 50);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);
            $table->dateTime('departure_time'); //YYYY-MM-DD hh:mm:ss
            $table->dateTime('arrival_time'); //YYYY-MM-DD hh:mm:ss
            $table->string('train_code', 20);
            $table->integer('train_carriage');
            $table->boolean('is_in_time');
            $table->boolean('is_cancelled');
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
        Schema::dropIfExists('trains');
    }
};
