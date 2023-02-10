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
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 20)->unique();
            $table->integer('train_carriage', 25);
            $table->tinyInteger('is_in_time', 1);
            $table->tinyInteger('is_cancelled', 1);
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
