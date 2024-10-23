<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'telephone'
    ];

    public function turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }
}
