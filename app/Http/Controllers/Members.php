<?php

namespace App\Http\Controllers;

use App\Member;
use DB;
use Illuminate\Http\Request;
class Members extends Controller
{
    //
    public function  create(Request $request){
        $members=new Member();
        $members->member_id=$request->memberid;
        $members->group_id=$request->groupid;
        $members->delete_status=0;
        $members->delete_reason='';
        $members->doneby=0;
        $members->delete_date=date("Y-m-d H:i");
        $members->regdate=date("Y-m-d H:i");
        $members->save();
    }
    public function show(Request $request,$id){
        //$objGroup= Member::with('citizen')->where('group_id',$id)->get();
        $objGroup=DB::select("SELECT members.*,citizens.names,citizens.nid,citizens.parentid,groups.names AS group_name FROM members INNER JOIN citizens ON citizens.id=members.member_id INNER JOIN groups ON groups.id=members.group_id");
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
