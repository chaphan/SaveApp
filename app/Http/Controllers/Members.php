<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
class Members extends Controller
{
    //
    public function  create(Request $request){
        $members=new Member();
        $members->member_id=$request->memberid;
        $members->groupid=$request->groupid;
        $members->delete_status=0;
        $members->delete_reason='';
        $members->doneby=0;
        $members->delete_date=date("Y-m-d H:i");
        $members->regdate=date("Y-m-d H:i");
        $members->save();
    }
    public function show(Request $request,$id = null){
        $members=new Member();
        if(isset($sid) && $sid!=null){
            $objGroup=$members->where('id',$id);
        }else{
            $objGroup=$members::all();
        }
        return $objGroup;
    }

    public function getMembersByGroup(Request $request){
        $members=new Member();
        if(isset($sid) && $sid!=null){
            $objGroup=$members->where('group_id',$request->id);
        }else{
            $objGroup=$members::all();
        }
        return $objGroup;
    }
}
