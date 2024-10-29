<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;
class OrderDocumentController extends Controller
{

    public function add_order($type_document, $name_user){
        if ($name_user) {
            if(Carbon::now()->month >= 1 and Carbon::now()->month <=6 ){
                $academic_year = Carbon::now()->subYear()->year .'/'.Carbon::now()->year;
                $half_year = 2;
            }
            else{
                $academic_year = Carbon::now()->year .'/'.Carbon::now()->addYear()->year;
                $half_year = 1;
            }
            // dd($academic_year);
            $rec_id = DB::table("student_ticket_numbers")
            ->where('ticket_number' ,'=',$name_user)
            ->select('user_id')
            ->get();
            $rec_id = $rec_id[0]->user_id;
            
            $now_date = date('y');
            // dd($rec_id);
            $data = DB::table("student_document_requests")
            ->insert([
                ['id' => NULL, 'document_type' => $type_document, 'status' => 1,
                'requester_id' => $rec_id,
                'academic_year' => $academic_year, 'half_year' => $half_year, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
            ]);

            return $data;
        }
        else{
            // 
        return null;
        }
    }
    public function add_user($name_user){
        return DB::table('users')
        ->join("users_data", "users.id", "=", "users_data.id")
        ->select(
            'users_data.last_name',
            'users_data.first_name',
            'users_data.middle_name',
            DB::raw("(SELECT ticket_number FROM student_ticket_numbers WHERE user_id = users.id ORDER BY id DESC LIMIT 1) as ticket_number"),
            
            )
        // ->where("name", $name_user)
        ->having("ticket_number", "=", $name_user)
        ->get();
    }
}   
