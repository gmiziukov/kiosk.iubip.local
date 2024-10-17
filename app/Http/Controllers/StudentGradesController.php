<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentGradesController extends Controller
{
    public function main(){
        $a = DB::table('student_grades')
        // ->join("bulletins","student_grades.bulletin_id","=","bulletins.id")
        // ->select('student_grades.*', 'group_id')
        ->get();
        dd($a);
        return $a;

    }
}
