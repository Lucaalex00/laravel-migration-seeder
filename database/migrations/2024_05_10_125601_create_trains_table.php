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
            $table->string('brand_name', 20)->nullable();
            $table->string('start_station', 30);
            $table->string('end_station', 30);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 30)->default('xxxxxx');
            $table->smallInteger('coach_number');
            $table->boolean('is_ontime')->nullable();
            $table->boolean('is_cancelled')->nullable();
            $table->timestamps();
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
