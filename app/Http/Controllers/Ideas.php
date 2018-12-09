<?php

namespace App\Http\Controllers;

use App\Idea;
use App\Saving;
use Illuminate\Http\Request;

class Ideas extends Controller
{
    public function create(Request $request) {
        $idea = new Idea();

        $idea->title = $request->title;
        $idea->min_capital = $request->capital;
        $idea->description = $request->description;
        $idea->save();
    }

    public function show(Request $request, $group_id) {
        $ideas=new Idea();
        if(isset($groupid) && $groupid!=null){
            $objGroup=$ideas->where('id',$groupid);
        }else{
            $objGroup=$ideas::all();
        }
        return $objGroup;
    }
}
