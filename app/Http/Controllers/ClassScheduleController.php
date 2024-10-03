<?php
// блок рассписания занятий
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClassScheduleController extends Controller
{
    public function data($data_now, $group_now){
        $a = DB::table("schedules")
        ->where("date", $data_now);
        if($group_now != NULL){
            $a->where("group", strtoupper($group_now));
        }
        return $a->get();
    }
    public function add_day(){
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format("Y-m-d");
        
        $weekendDate = $now->endOfWeek()->format("Y-m-d");
    }
}
