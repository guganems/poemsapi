<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoemsController extends Controller
{
    public function getPoem($id){

        $poems = DB::table('poems')->where('id', '=', $id)->get();

        return $poems;
    }

    public function getPoemsCount(){
        $count = DB::table('poemsCount')->where('id', '=', 1)->get();

        return $count;
    }
}
