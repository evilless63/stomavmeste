<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortController extends Controller
{
    public function updateOrder(Request $request, $type){

        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                DB::table($type)->where('id', $id)
                    ->update(array('sort_order' => $sortOrder));
            }
            return ['success'=>true,'message'=>'Updated'];
        }
    }
}
