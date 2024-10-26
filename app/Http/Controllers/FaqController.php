<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FaqController extends Controller
{   
    public $data = Null;
    public function search($search_data){
        dd($search_data);

        return DB::table("faqs")->where("question","LIKE","%".$search_data."%")->get();
    }
    public function data(){
        $a = DB::table("faqs")
        ->orderBy("relevance","DESC");
        $a = $a->get();
        // dd($a->get()); 
        return $a;
    }
    public function order($category){
        $a = DB::table("faqs")
        ->where("category",'=',$category)
        ->get();
        // dd($a->get()); 
        return $a;
    }
    public function data_now($i){
        $a = DB::table("faqs")
        ->where("id", $i);
        $a = $a->get();
        foreach($a as $k){
            $int = $k->relevance +1;
            $this->data_relevance($int, $i);
        }
        // dd($a->get()); 
        return $a;
    }
    public function data_relevance($i, $id){
        DB::update(
            'update faqs set relevance = ? where id = ?',
            [$i, $id]);

        return 0;
    }
}
