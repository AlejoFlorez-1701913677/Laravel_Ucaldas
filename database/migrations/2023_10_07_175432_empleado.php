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
        Schema::create('Empleados', function (Blueprint $table) {

            $table->id();
            $table->string('phone')->length(10);
            $table->string('name')->default("User");
            $table->string('email')->unique();
            $table->string('eps')->default("Sin EPS");
            $table->integer('stateSubsidy')->length(10);
            $table->date('confirmationDate');
            $table->date('legalizationDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Empleados');
    }
};
