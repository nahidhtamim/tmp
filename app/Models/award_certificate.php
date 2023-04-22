<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class award_certificate extends Model
{
    use HasFactory;

    protected $table = 'award_certificates';

    protected $fillable = [
        'type_id',
        'title',
        'description',
        'image',
        'featured',
        'status',
    ];
}
