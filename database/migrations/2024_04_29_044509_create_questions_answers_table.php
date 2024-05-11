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
        Schema::create('questions_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions');
            $table->foreignId('answer_id')->constrained('answers');
            $table->boolean('isCorrect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions_answers');
    }
};
