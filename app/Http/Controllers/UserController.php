<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App1\Models\User;

class UserController extends Controller
{
    public function create(Request $request){
        $user = new User();
        return Response()->json($user->create($request));
    }

    public function delete(Request $request){
        $user = new User();
        return Response()->json($user->delete($request));
    }

    public function update(Request $request){
        $user = new User();
        return Response()->json($user->update($request));
    }
}
