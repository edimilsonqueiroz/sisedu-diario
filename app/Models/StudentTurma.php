<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTurma extends Model
{
    use HasFactory;


    protected $table = 'student_turma';

    protected $fillable = [
        'student_id',
        'turma_id'
    ];

}
