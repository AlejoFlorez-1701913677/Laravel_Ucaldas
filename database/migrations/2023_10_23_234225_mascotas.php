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
        Schema::create('Mascota', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner')->nullable();
            $table->string('race');
            $table->integer('weight')->length(3)->comment('Dimensions in CM');
            $table->integer('height')->length(3)->comment('Dimensions in CM');
            $table->integer('width')->length(3)->comment('Dimensions in CM');
            $table->date('birthday');
            $table->date('lastVaccination')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Mascota');
    }
};
