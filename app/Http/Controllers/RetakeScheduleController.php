<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetakeScheduleController extends Controller
{
    public function main_data(){
        $a = DB::table("retake_schedules");
        $a = $a->get();
        return $a;
    }
    public function search($name){
        $a = DB::table("retake_schedules")
        ->where("fio_teacher",$name);
        $a = $a->get();
        return $a;
        
    }
}
