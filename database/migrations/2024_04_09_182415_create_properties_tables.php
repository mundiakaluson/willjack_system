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
        Schema::create('properties_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('landlord_id')->nullable();
            $table->string('alias')->nullable();
            $table->string('category')->nullable();
            $table->string('town')->nullable();
            $table->string('area')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('units')->nullable();
            $table->tinyInteger('units_vacant')->nullable();
            $table->integer('monthly_rent')->nullable();
            $table->integer('cummulative_monthly_rent')->nullable();
            $table->string('filename')->defualt('');

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_tables');
    }
};
