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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->integer('ano');
            $table->boolean('active');
            $table->date('dataConclusao')->nullable();
            $table->timestamps();
        });

        Schema::create('classe_discipline', function (Blueprint $table) {
            $table->id();
            $table->integer('classe_id');
            $table->integer('discipline_id');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('classe_student', function (Blueprint $table) {
            $table->id();
            $table->integer('classe_id');
            $table->integer('student_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
        Schema::dropIfExists('classe_discipline');
        Schema::dropIfExists('classe_student');
    }
};
