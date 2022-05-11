<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'recommended',
        'outstanding',

    ];

    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }

    public function subCategories(){
        return $this->belongsToMany('App\Models\Subcategory');
    }

    public function usuarios(){
        $this->hasMany('App\Models\User');
    }
}
