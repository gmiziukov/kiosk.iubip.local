<?php

namespace App\Http\Controllers;

use App\Models\AcademicRetakeSchedule;
use Illuminate\Support\Facades\DB;

class AcademicRetakeScheduleController extends Controller
{
    public function getAcademicRetakeSchedule($search = null)
    {
        $data = AcademicRetakeSchedule::join('users_data', 'academic_retake_schedules.user_id', '=', 'users_data.user_id')
            ->where('academic_retake_schedules.academic_year', '=', AcademicYearController::getAcademicYear())
            ->where('academic_retake_schedules.half_year', '=', AcademicYearController::getHalfYear());

        if (!is_null($search) && $search != '') {
            $data->having('fio', 'like', '%' . $search . '%');
        }

        $data = $data->select(
            'academic_retake_schedules.id',
            DB::raw("CONCAT(users_data.last_name, ' ', users_data.first_name, ' ', users_data.middle_name) as fio"),
            'academic_retake_schedules.retake_date',
            'academic_retake_schedules.retake_time',
            'academic_retake_schedules.room',
            'academic_retake_schedules.academic_year',
            'academic_retake_schedules.half_year'
        )
            ->get();

        return $data;
    }
}
