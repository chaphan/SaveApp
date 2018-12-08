<?php

namespace App\Http\Controllers;

use App\Funding;
use Illuminate\Http\Request;

class Fundings extends Controller
{
    public function store(Request $request) {
        $funding = new Funding();

        $funding->amount = $request->amount;
        $funding->owner_id = $request->owner_id;
        $funding->names = $request->names;
        $funding->group_id = $request->group_id;
        $funding->save();
    }
    
    public function show(Request $request, $groupid=null) {
        $fundings = new Funding();
        if(isset($groupid) && $groupid!=null){
            $objGroup=$citizens->where('id',$id);
        }else{
            $objGroup=$citizens::all();
        }
        return $objGroup;
    }
}
