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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('typePlanName')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_link')->nullable();
            $table->integer('priceNet')->nullable();
            $table->integer('priceGross')->nullable();
            $table->string('floorMap')->nullable();
            $table->integer('useFullArea')->nullable();
            $table->string('floors')->nullable();
            $table->string('rooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->integer('terraceSize')->nullable();
            $table->integer('innerHeight')->nullable();
            $table->string('planType')->nullable();
            $table->string('accessibility')->nullable();
            $table->integer('executionTime')->nullable();
            $table->string('levelOfPreparation')->nullable();
            $table->string('wallType')->nullable();
            $table->string('foundation')->nullable();
            $table->string('heatingType')->nullable();
            $table->string('heatingEnergySupply')->nullable();
            $table->string('coolingType')->nullable();
            $table->string('renewableEnergy')->nullable();
            $table->string('energeticClassification')->nullable();
            $table->string('priceAvailability')->nullable();
            $table->string('property_thambnail');
            $table->integer('company_id')->nullable();
            $table->string('status')->default(0);
            $table->text('short_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
