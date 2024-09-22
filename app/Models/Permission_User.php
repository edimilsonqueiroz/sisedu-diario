<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class Permission_User extends Pivot
{
    use HasFactory;
    protected $table = "permissions_users";
    protected $fillable = [
        'permission_id',
        'user_id'
    ];
}
