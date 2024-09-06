<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Tablo adını belirtir

    protected $fillable = [
        'name',
        'position',
        'status'
    ];

    public $timestamps = true;
}
