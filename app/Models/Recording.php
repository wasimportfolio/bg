<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    protected $fillable = [
        'title',
        'description',
        'video',
        'status',
    ];
}