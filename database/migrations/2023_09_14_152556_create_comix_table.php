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
        Schema::create('comixes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 70)->unique();
            $table->text('description', 4096);
            $table->string('thumb', 2048)->nullable();
            $table->string('price');
            $table->string('series')->nullable();
            $table->string('sale_date');
            $table->string('type')->nullable();
            $table->text('artist');
            $table->text('writers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comixes');
    }
};
