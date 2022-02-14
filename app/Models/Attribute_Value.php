<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_Value extends Model
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
}
