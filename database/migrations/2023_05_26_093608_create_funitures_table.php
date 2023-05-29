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
        Schema::create('funitures', function (Blueprint $table) {
            $table->id();
            $table->string('name');//nameという文字列
            $table->string('prefecture');
            $table->string('address');
            $table->string('image');
            $table->integer('price');
            $table->double('review');
            $table->boolean('is_visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funitures');
    }
};
