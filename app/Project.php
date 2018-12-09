<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Project extends Model
{public $timestamps = false;
    public function create(Request $request) {
        $project = new  Project();
        $project->description = $request->description;
        $project->attachments = $request->attachments;
        $project->group_id = $request->group_id;
        $project->amount_required = $request->amount_required;
        $project->amount_available = $request->amount_available;
        $project->save();
    }  
    
    public function show(Request $request, $groupid) {
        $projects=new Saving();
        if(isset($groupid) && $groupid!=null){
            $objGroup=$projects->where('id',$groupid);
        }else{
            $objGroup=$projects::all();
        }
        return $objGroup;
    }
}
