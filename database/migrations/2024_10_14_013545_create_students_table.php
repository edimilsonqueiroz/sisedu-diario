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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('rg');
            $table->string('sexo');
            $table->date('dataNascimento');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('student_discipline', function (Blueprint $table) {
            $table->integer('student_id');
            $table->integer('discipline_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('student_discipline');
    }
};
