<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'cat_id',
        'image',
        'status'
    ];

    public function cat_info()
    {
        return $this->belongsTo(image_category::class,'cat_id','id');
    }

    public function category() {
        return $this->belongsTo('App\Model\image_category');
    }
}
