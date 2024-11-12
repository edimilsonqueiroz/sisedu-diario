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
        Schema::create('frequency', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('turma_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('discipline_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('bimestre');
            $table->dateTime('data');
            $table->boolean('presenca');
            $table->boolean('falta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frequency');
    }
};
