<?php
// блок рассписания занятий
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassScheduleController extends Controller
{
    public function data(){
        return DB::table("schedules")->get();
    }
}
