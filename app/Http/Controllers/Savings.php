<?php

namespace App\Http\Controllers;

use App\Saving;
use App\SavingGoal;
use Illuminate\Http\Request;

class Savings extends Controller
{
    //
    public function  create(Request $request){
        $savings=new Saving();
        $savings->member_id=$request->memberid;
        $savings->group_id=$request->groupid;
        $savings->amount=$request->amount;
        $savings->regdate=date("Y-m-d H:i");
        $savings->save();

    }

    public function show(Request $request,$groupid = null){
        $savings=new Saving();
        if(isset($groupid) && $groupid!=null){
            $objGroup=$savings->where('id',$groupid);
        }else{
            $objGroup=$savings::all();
        }
        return $objGroup;
    }
}
