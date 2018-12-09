<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{public $timestamps = false;

    public function group(){
        $this->belongsTo('App\Group','group_id','id');
    }
    public function product(){
        $this->belongsTo('App\Product','product_id','id');
    }

}
