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
            $table->string('title', 128);
            $table->text('description',);
            $table->string('thumb');
            $table->decimal('price');
            $table->string('series');
            $table->string('sale_date');
            $table->string('type');
            $table->string('artist');
            $table->string('writers');
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
