<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('agency', 25);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 15)->unsigned();
            $table->tinyInteger('wagons')->unsigned();
            $table->boolean('on_time')->default(1);
            $table->boolean('cancelled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
