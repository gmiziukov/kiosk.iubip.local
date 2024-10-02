<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderDocumentController extends Controller
{
    public function add_order($type_document, $name_user){
        $rec_id = DB::table("users")
        ->where('name', $name_user)
        ->get();
        $now_date = date('y');
        return DB::table("student_document_requests")
        ->insert([
            ['id'=> NULL, 'document_type'=> $type_document,'status'=> 1,'requester_id'=> $rec_id[0]->id,'academic_year'=> '2024/2025','half_year'=> 1,'created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')]
        ]);

    }
}
