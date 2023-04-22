<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipment_card extends Model
{
    use HasFactory;

    protected $table = 'equipment_cards';

    protected $fillable = [
        'serial',
        'title',
        'image',
        'link',
        'status'
    ];
}
