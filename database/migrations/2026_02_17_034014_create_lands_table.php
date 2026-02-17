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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            // Land Information
            $table->string('locality');
            $table->string('address');
            $table->decimal('size_in_katha', 8, 2);
            $table->integer('road_width');
            $table->string('category');
            $table->string('facing');
            $table->text('attractive_features')->nullable();
            // Landowner Info
            $table->string('owner_name');
            $table->string('contact_number');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
