<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    //
    public function member(){
        $this->hasMany('App\Member','member_id','id');
    }
    public function saving(){
        $this->hasMany('App\Saving','member_id','id');
    }
}
