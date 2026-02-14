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
            $table->foreignId('location_id')->constrained()->cascadeOnDelete();

            $table->string('title');
            $table->decimal('land_area', 10, 2)->nullable();
            $table->tinyInteger('no_of_floors')->nullable();
            $table->tinyInteger('apartment_per_floor')->nullable();
            $table->string('apartment_size')->nullable();
            $table->tinyInteger('bedrooms')->nullable();
            $table->string('launch_date_note')->nullable();
            $table->string('collection')->nullable();
            $table->tinyInteger('status')->default(1);
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
