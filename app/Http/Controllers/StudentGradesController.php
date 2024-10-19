<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentGradesController extends Controller
{
    public function getStudentGrades($ticketNumber)
    {
        return DB::table('student_grades')
            ->join("users", "student_grades.user_id", "=", "users.id")
            ->join("bulletins", "student_grades.bulletin_id", "=", "bulletins.id")
            ->join("work_study_plan_course_control_types_in_semesters", "bulletins.work_study_plan_course_control_types_in_semesters_id", "=", "work_study_plan_course_control_types_in_semesters.id")
            ->join("work_study_plan_courses_in_semesters", "work_study_plan_course_control_types_in_semesters.work_study_plan_courses_in_semester_id", "=", "work_study_plan_courses_in_semesters.id")
            ->join("work_study_plan_courses", "work_study_plan_courses_in_semesters.work_study_plan_course_id", "=", "work_study_plan_courses.id")
            ->join("disciplines", "work_study_plan_courses.discipline_id", "=", "disciplines.id")
            ->join("control_types", "work_study_plan_course_control_types_in_semesters.control_type_id", "=", "control_types.id")
            ->select(
                'student_grades.grade',
                "disciplines.name",
                "bulletins.type_bulletin_id",
                "control_types.name as type_name",
                DB::raw("(SELECT ticket_number FROM student_ticket_numbers WHERE user_id = student_grades.user_id ORDER BY id DESC LIMIT 1) as ticket_number"),
            )
            ->having("ticket_number", "=", $ticketNumber)
            ->get();
    }
}
