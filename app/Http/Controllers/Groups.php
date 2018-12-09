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
        $groups->phone = 0;
        $groups->password = '';
        $groups->delete_status =0;
        $groups->delete_reason = '';
        $groups->email = '';
        $groups->balance = 0;
        $groups->doneby = 0;
        $groups->delete_date = date("Y-m-d H:i");
        $groups->regdate = date("Y-m-d H:i");
        $groups->save();

/*        $s_goals = new SavingGoal();
        $s_goals->description = 0;
        $s_goals->target_amount = 0;
        $s_goals->group_id = $groups->id;
        $s_goals->save();
*/        return 'ok';

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
