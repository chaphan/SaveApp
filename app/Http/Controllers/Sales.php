<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sales extends Controller
{
    //

    public function  create(Request $request){
        $sales=new Sale();
        $sales->product_id=$request->productid;
        $sales->group_id=$request->groupid;
        $sales->quantity=$request->quantity;
        $sales->boughtpu=$request->pu;
        $sales->amount=$request->amount;
        $sales->pay_status='done';
        $sales->system_ratio=150;
        $sales->regdate=date("Y-m-d H:i");
        $sales->save();
    }
    public function show(Request $request,$id){
        $sales=new Sale();
        if(isset($sid) && $sid!=null){
            $objGroup=$sales->where('id',$id);
        }else{
            $objGroup=$sales::all();
        }
        return $objGroup;
    }
}
