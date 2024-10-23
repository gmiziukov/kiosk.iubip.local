<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RetakeScheduleController extends Controller
{
    public function main_data()
    {
        return DB::table("retake_schedules")->orderBy('date')->get();
    }

    public function search($name)
    {
        return DB::table("retake_schedules")->where("fio_teacher", "like", "%".$name."%")->get();
        // return DB::table("retake_schedules")->where("fio_teacher", $name)->get();
    }
}