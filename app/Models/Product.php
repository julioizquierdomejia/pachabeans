<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'uri_image_banner',
        'image_banner',
        'recommended',
        'outstanding',

    ];

    
    public function images(){
        return $this->hasMany('App\Models\ImagesProduct');
    }
    
    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    //relacion muchos a muchos
    public function values(){
        return $this->belongsToMany('App\Models\Value');
    }
}
