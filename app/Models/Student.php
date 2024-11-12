<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'name',
        'email',
        'telephone',
        'cpf',
        'rg',
        'sex',
        'motherName',
        'fatherName',
        'dateBirth',
        'current_class'
    ];
}
