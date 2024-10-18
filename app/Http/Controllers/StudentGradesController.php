<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentGradesController extends Controller
{
    public function main() {
        // need grade 
        $a = DB::table('student_grades')
        // need name
        ->join("users","student_grades.user_id","=","users.id")
        //  need group_id to cont and work_study_plan_course_control_types_in_semesters to cont and type_bulletin_id to cont 
        ->join("bulletins","student_grades.bulletin_id","=","bulletins.id")
        //  need  work_study_plan_courses_in_semester_id to cont 
        ->join("work_study_plan_course_control_types_in_semesters","bulletins.work_study_plan_course_control_types_in_semesters_id","=","work_study_plan_course_control_types_in_semesters.id")
        // need work_study_plan_courses_in_semesters to cont work_study_plan_course_control_types_in_semesters
        ->join("work_study_plan_courses_in_semesters","work_study_plan_course_control_types_in_semesters.work_study_plan_courses_in_semester_id","=","work_study_plan_courses_in_semesters.id")

        ->join("work_study_plan_courses","work_study_plan_courses_in_semesters.work_study_plan_course_id","=","work_study_plan_courses.id")
        //  need name 
        ->join("disciplines","work_study_plan_courses.discipline_id","=","disciplines.id")
        //need name 
        ->join("control_types","work_study_plan_course_control_types_in_semesters.control_type_id","=","control_types.id")
 
        ->select('student_grades.grade', "disciplines.name", "bulletins.type_bulletin_id", "control_types.name as type_name")
        // 
        ->where("users.name","=","st107206")
        // 
        ->get();
        // dd($a);
        return $a;

    }
}
