<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model
use App\Models\Infomation;

class FishController extends Controller
{
    public function getJson(Request $request){


        $infomation = Infomation::where('name',$request->name)->first();

        if($infomation == null){
            return response()->json([
            'order' => null,
            'family' => null
            ]);
        }

        return response()->json([
            'order' => $infomation->order,
            'family' => $infomation->family
        ]);
    }
}
