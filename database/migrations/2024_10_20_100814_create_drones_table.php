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
        Schema::create('drones', function (Blueprint $table) {
            $table->id();
            $table->string('id_drone');
            $table->string('drone_name');
            $table->string('model');
            $table->string('brand');
            $table->string('airworthiness');
            $table->string('operational');
            $table->string('internalSerial');
            $table->string('printedSerial');
            $table->string('remoteID');
            $table->string('purchased');          
            $table->string('notes');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drones');
    }
};
