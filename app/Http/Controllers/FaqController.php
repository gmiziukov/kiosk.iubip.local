<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FaqController extends Controller
{   
    public $data = Null;

    public function data(){
        $a = DB::table("faqs");
        $a = $a->get();
        // dd($a->get()); 
        return $a;
    }
}
