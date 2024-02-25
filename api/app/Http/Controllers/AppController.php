<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistrictResource;
use App\Http\Resources\RegionResource;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;

class AppController extends Controller
{
     //Get regions in tanzania
   public function getRegions(){
    $regions = RegionResource::collection(Region::all()) ;
    if ($regions) {
        return response()->json([
            'message' => 'Success Fetching',
            'data' => $regions
        ],200);
    } else {
        return response()->json([
            'message' => 'No regions',
        ],404);
    }
   }

   public function getDistrict(Region $targetRegion){
        $district =DistrictResource::collection(District::where('region' , $targetRegion['region'])->get());
    if ($district) {
        return response()->json([
            'message' => 'Success Fetching',
            'data' => $district
        ],200);
    } else {
        return response()->json([
            'message' => 'No district',
        ],404);
    }

   }
}
