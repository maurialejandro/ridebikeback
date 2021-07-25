<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Dicipline extends Model
{
    use HasFactory;

    public function get($request){
        $diciplines = DB::table('diciplines')->get();
        return $diciplines;
    }
}
