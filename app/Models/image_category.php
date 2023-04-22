<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_category extends Model
{
    use HasFactory;

    protected $table = 'image_categories';

    protected $fillable = [
        'serial',
        'name',
        'status'
    ];

    public function image() {
        return $this->hasMany('App\Model\image');
    }
}
