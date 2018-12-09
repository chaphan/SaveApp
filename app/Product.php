<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{public $timestamps = false;
    public function group(){
        $this->belongsTo('App\Group','group_id','id');
    }
}
