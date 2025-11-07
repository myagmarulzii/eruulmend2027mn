<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'category',
        'suggestion',
    ];
}
