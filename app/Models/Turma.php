<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turma extends Model
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


    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
