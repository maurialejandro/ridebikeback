<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Spot;

class SpotController extends Controller
{
    public function get(Request $request){
        $spots = new Spot();
        return Response()->json($spots->get($request));
    }
}
