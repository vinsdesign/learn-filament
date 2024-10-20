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
        Schema::table('drones', function (Blueprint $table) {
            $table->string('internalSerial')->nullable()->change();
            $table->string('printedSerial')->nullable()->change();
            $table->string('remoteID')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('drones', function (Blueprint $table) {
            $table->string('internalSerial');
            $table->string('printedSerial');
            $table->string('remoteID');
        });
    }
};
