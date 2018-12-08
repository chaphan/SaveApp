<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
class Groups extends Controller
{
    public function  create(Request $request){
        $groups= new Group();
        $groups->names = $request->names;
        $groups->username = $request->username;
        $groups->phone = $request->phone;
        $groups->email = $request->email;
        $groups->balance = 0;
        $groups->regdate = date("Y-m-d H:i");
        $groups->save();
    }

    public function show(Request $request,$id=null){

        if(isset($sid) && $sid!=null){
            $objGroup= Group::where('id',$id)->get();
        }else{
            $objGroup= Group::all();
        }
        return $objGroup;
    }
}
