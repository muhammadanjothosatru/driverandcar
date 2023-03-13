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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name');
            $table->string('plate_number');
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->string('vehicle_type');
            $table->string('color');
            $table->date('tax_date');
            $table->timestamps();
            $table->foreign('driver_id')->references('driver_id')->on('driver');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
