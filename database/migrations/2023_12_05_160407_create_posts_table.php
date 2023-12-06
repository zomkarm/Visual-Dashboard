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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('end_year')->nullable();
            $table->string('citylng')->nullable();
            $table->string('citylat')->nullable();
            $table->integer('intensity')->nullable();
            $table->string('sector')->nullable();
            $table->string('topic')->nullable();
            $table->string('insight')->nullable();
            $table->string('swot')->nullable();
            $table->string('url')->nullable();
            $table->string('region')->nullable();
            $table->integer('start_year')->nullable();
            $table->integer('impact')->nullable();
            $table->dateTime('added')->nullable();
            $table->dateTime('published')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->integer('relevance')->nullable();
            $table->string('pestle')->nullable();
            $table->string('source')->nullable();
            $table->string('title')->nullable();
            $table->integer('likelihood')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
