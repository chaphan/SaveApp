<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Citizen extends Controller
{
    //
    public function  create(Request $request){
        $citizens=new Citizen();
        $citizens->names=$request->names;
        $citizens->nid=$request->nid;
        $citizens->parentid=$request->parentid;
        $citizens->birthday=$request->birthday;
        $citizens->delete_status=0;
        $citizens->delete_reason='';
        $citizens->doneby=0;
        $citizens->delete_date=date("Y-m-d H:i");
        $citizens->regdate=date("Y-m-d H:i");
        $citizens->save();
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
