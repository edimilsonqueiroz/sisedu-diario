<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaStudent extends Model
{
    use HasFactory;


    protected $table = 'turma_student';

    protected $fillable = [
        'turma_id',
        'student_id'
    ];

}
