<?php
// блок рассписания занятий
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClassScheduleController extends Controller
{
    public function data($now_data, $group_now){
        $a = DB::table("schedules")
        ->where("date", $now_data);
        if($group_now != NULL){
            $a->where("group", strtoupper($group_now));
        }
        return $a->get();
    }
    public function add_day_student($now_date, $group_now){
        $now = new Carbon($now_date->format("Y-m-d"));
        $weekStartDate = $now->startOfWeek()->format("Y-m-d");
        $weekendDate = $now->endOfWeek()->format("Y-m-d");
        // $weekStartDate = '2024-09-30';
        // $weekendDate ='2024-10-05';
        $a = DB::table("schedules")
        ->where("date", '>=',$weekStartDate )
        ->where("date", '<=',$weekendDate );
        if($group_now != NULL){
            $a->where("group", strtoupper($group_now));
        }
        $a = $a->get();
        // dd($a);
        // dd($a);
        return $a;
    }
    public function add_day_teacher($now_date, $group_now){
        $now = $now_date;
        $weekStartDate = $now->startOfWeek()->format("Y-m-d");
        $weekendDate = $now->endOfWeek()->format("Y-m-d");
        // $weekStartDate = '2024-09-30';
        // $weekendDate ='2024-10-05';
        $a = DB::table("schedules")
        ->where("date", '>=',$weekStartDate )
        ->where("date", '<=',$weekendDate );
        if($group_now != NULL){
            $a->where("teacher", strtoupper($group_now));
        }
        $a = $a->get();
        $b = $a;
        for($i = 0; $i  != count($a);$i++){
            for($j = 0;$j != count($b);$j++){
                if($a[$i]->date == $b[$j]->date and $a[$i]->time == $b[$j]->time and $a[$i]->discipline == $b[$j]->discipline and $a[$i]->group != $b[$j]->group){
                   $a[$i]->group = $a[$i]->group." ".$b[$j]->group;
                   $a[$j]->discipline = null;
                   $a[$j]->group = null;
                   $a[$j]->lesson_place = null;
                   $a[$j]->lesson_type = null;
                //    unset($a[$j]->discipline);
                }
            }
        }

        // ################## old var ##################
        // foreach($a as $a_arr)
        //     foreach($b as $b_arr)
        //         if($a_arr->date == $b_arr->date and $a_arr->time == $b_arr->time and $a_arr->discipline == $b_arr->discipline and $a_arr->group != $b_arr->group){

        //             $a_arr->discipline = "";
        //             $a_arr->lesson_type = "";
        //             // unset($a[$a_arr->discipline]);
        //         }
            

        // dd($a);
        return $a;
        }

}
