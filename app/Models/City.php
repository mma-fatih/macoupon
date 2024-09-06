<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\District;

class City extends Model
{
    protected $fillable = ['name', 'plateCode'];

    // Şehre ait ilçeleri döndür
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}