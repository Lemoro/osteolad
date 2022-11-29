<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'publish',
        'title',
        'direction',
        'text',
        'keyword',
        'description',
        'image',
        'full_image',

    ];
}
