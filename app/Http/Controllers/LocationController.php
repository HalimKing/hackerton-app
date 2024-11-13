<?php

namespace App\Http\Controllers;

use App\Models\RegionDistrict;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function getDistricts(Request $request)
    {

         $districts = RegionDistrict::where('region', $request->region)->get();
        return response()->json($districts);
        // dd($districts);

        // $districts = District::where('region', $request->region)->get(['id', 'district_name']); // Assuming 'district_name' is the column name
        // return response()->json($districts);
    }
}
