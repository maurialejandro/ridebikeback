<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Spot extends Model
{
    use HasFactory;

    public function get($request){
        $spots = DB::table('spots')->get();
        return $spots;
    }
}
