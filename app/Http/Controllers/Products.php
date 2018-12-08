<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class Products extends Controller
{
    //
    public function  create(Request $request){
        $groups=new Product();
        $groups->group_id=$request->groupid;
        $groups->quantity=$request->quantity;
        $groups->pu=$request->pu;
        $groups->delete_status=0;
        $groups->delete_reason='';
        $groups->doneby=0;
        $groups->regdate=date("Y-m-d H:i");
        $groups->save();
    }
    public function show(Request $request,$id=null){
        $groups=new Product();
        if(isset($sid) && $sid!=null){
            $objGroup=$groups->where('id',$id);
        }else{
            $objGroup=$groups::all();
        }
        return $objGroup;
    }
}
