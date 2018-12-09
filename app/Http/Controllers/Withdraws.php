<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Withdraws extends Controller
{
    //
    public function  create(Request $request){
        $withdraws=new Withdraws();
        $withdraws->product_id=$request->productid;
        $withdraws->group_id=$request->groupid;
        $withdraws->amount=$request->amount;
        $withdraws->doneby=0;
        $withdraws->regdate=date("Y-m-d H:i");
        $withdraws->save();
    }
    public function show(Request $request,$id){
        $withdraws=new Withdraws();
        if(isset($sid) && $sid!=null){
            $objGroup=$withdraws->where('id',$id);
        }else{
            $objGroup=$withdraws::all();
        }
        return $objGroup;
    }
}
