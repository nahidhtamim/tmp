<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $fillable = [
        'serial',
        'image_id',
        'service_id',
        'page_id',
        'blog_id',
        'status'
    ];

    public function image_info()
    {
        return $this->belongsTo(image::class,'image_id','id');
    }

    // public function setImageAttribute($value)
    // {
    //     $this->attributes['image_id'] = json_encode($value);
    // }


    // public function getImageAttribute($value)
    // {
    //     return $this->attributes['image_id'] = json_decode($value);
    // }
}
