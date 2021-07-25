<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dicipline;

class DiciplineController extends Controller
{
    public function get(Request $request){
        $diciplines = new Dicipline();
        return Response()->json($diciplines->get($request));
    }
}
