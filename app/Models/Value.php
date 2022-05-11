<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Value extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'attribute_id',
        '$producto->id',
        'color',

    ];


    //relacion muchos a muchos
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }


}
