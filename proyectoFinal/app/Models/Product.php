<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    //const CREATED_AT = null;
    //const UPDATED_AT = null;

    protected $fillable = [
        'title',
        'description',
        'price',
        'available',
        'image',
        'slug',
        'category_id'
    ];
}
