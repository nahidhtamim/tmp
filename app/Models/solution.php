<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solution extends Model
{
    use HasFactory;

    protected $table = 'solutions';

    protected $fillable = [
        'title',
        'image',
        'status',
    ];
}
