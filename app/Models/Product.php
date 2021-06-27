<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    // public $timestamps = true;

    // protected $casts = [
    //     'price' => 'float'
    // ];

    protected $fillable = [
        'name',
        'description',
        'unit_price',
        'promotion_price',
        'image',
        'unit',
        'new',
        'created_at',
        'updated_at'
    ];
}
