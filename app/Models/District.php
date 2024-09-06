<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class District extends Model
{
    protected $fillable = ['name', 'postCodeCode', 'city_id'];

    // İlçe hangi şehre ait
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}