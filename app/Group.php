<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{public $timestamps = false;
    public function product(){
        $this->hasMany('App\Product','group_id','id');
    }

    public function savings() {
        $this->hasMany('App\Saving', 'group_id', 'id');
    }

    public function sales(){
        $this->hasMany('App\Sale','group_id','id');
    }
    public function withdraw(){
        $this->hasMany('App\Withdraw','group_id','id');
    }
}
