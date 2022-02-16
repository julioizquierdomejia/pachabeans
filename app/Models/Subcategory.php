<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'recommended',
        'outstanding',
        'status',
        'category_id',
    ];

    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }
}
