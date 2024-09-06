<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistricts($city_id)
    {
        // Belirli bir şehre ait ilçeleri döndür
        $districts = District::where('city_id', $city_id)->get();
        return response()->json($districts);
    }
}