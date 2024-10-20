<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'name',
        'year',
        'active',
        'startDate',
        'endDate'
    ];
}
