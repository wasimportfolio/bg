<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
   protected $fillable = [
    'title',
    'description',
    'image',
    'price',
    'status',
];
}