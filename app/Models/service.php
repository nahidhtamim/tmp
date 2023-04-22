<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'image',
        'name',
        'description_one',
        'description_two',
        'slug',
        'status',
        'type_id',
    ];
}
