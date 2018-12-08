<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    //

    public function group(){
        $this->belongsTo('App\Group','group_id','id');
    }
    public function citizen(){
        $this->belongsTo('App\Citizen','member_id','id');
    }
}
