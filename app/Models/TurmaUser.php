<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmaUser extends Model
{
    protected $table = 'turma_user';

    protected $fillable = [
        'turma_id',
        'user_id'
    ];
}
