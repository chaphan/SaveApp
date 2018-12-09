<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{public $timestamps = false;
    //
    public function group(){
        $this->belongsTo('App\Group','group_id','id');
    }

    public function citizen(){
        $this->belongsTo('App\Citizen','member_id','id');
    }
}
