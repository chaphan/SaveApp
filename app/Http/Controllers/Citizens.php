<?php

namespace App\Http\Controllers;

use App\Citizen;
use App\Member;
use Illuminate\Http\Request;
class Citizens extends Controller
{
    //
    public function  create(Request $request){
        $citizens=new Citizen();
        $citizens->names=$request->names;
        $citizens->nid=$request->nid;
        $citizens->parentid=$request->parentid;
        $citizens->birthday=date("Y-m-d H:i");
        $citizens->delete_status=0;
        $citizens->delete_reason='';
        $citizens->doneby=0;
        $citizens->delete_date=date("Y-m-d H:i");
        $citizens->regdate=date("Y-m-d H:i");
        $citizens->save();
        $members=new Member();
        $members->group_id=$request->groupid;
        $members->member_id=$citizens->id;
        $members->delete_status=0;
        $members->delete_reason='';
        $members->doneby=0;
        $members->delete_date=date("Y-m-d H:i");
        $members->regdate=date("Y-m-d H:i");
        $members->save();
        return 'ok';
    }

    public function show(Request $request, $id = null){
        $citizens=new Citizen();
        if(isset($sid) && $sid!=null){
            $objGroup=$citizens->where('id',$id);
        }else{
            $objGroup=$citizens::all();
        }
        return $objGroup;
    }
}
