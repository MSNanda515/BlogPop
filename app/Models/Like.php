<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Like extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id'
    ];
}
