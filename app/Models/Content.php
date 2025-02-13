<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'turma_id',
        'discipline_id',
        'bimonthly',
        'date',
        'content'
    ];
}
