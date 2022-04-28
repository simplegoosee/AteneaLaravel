<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPrivilegio extends Model
{
    use HasFactory;

    protected $fillable = [
        'rolId',
        'privilegioId',
    ];
}
