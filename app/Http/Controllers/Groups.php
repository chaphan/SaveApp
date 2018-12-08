<?php

namespace App\Http\Controllers;

use App\SavingGoal;
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

        $s_goals = new SavingGoal();
        $s_goals->description = $request->description;
        $s_goals->target_amount = $request->target_amount;
        $s_goals->group_id = $groups->id;
        $s_goals->save();

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
