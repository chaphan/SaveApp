<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Configurations extends Controller
{
    //
    public function  create(Request $request){
        $configurations=new Configuration();
        $configurations->name=$request->memberid;
        $configurations->ratio=$request->ratio;
        $configurations->unit=$request->unit;
        $configurations->regdate=date("Y-m-d H:i");
        $configurations->save();
    }
    public function show(Request $request,$id){
        $configurations=new Configuration();
        if(isset($sid) && $sid!=null){
            $objGroup=$configurations->where('id',$id);
        }else{
            $objGroup=$configurations::all();
        }
        return $objGroup;
    }
}
