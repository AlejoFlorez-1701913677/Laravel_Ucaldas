<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = "Mascota";

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'name',
        'owner',
        'race',
        'weight',
        'height',
        'width',
        'birthday',
        'lastVaccination'
    ];
}
