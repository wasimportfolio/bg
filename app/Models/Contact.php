<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'phone',
        'whatsapp',
        'gpay',
        'facebook',
        'youtube',
        'instagram',
        'status',
    ];
}