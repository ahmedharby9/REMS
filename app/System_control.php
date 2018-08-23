<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System_control extends Model
{
    public $table = "system_controls";
//    public $timestamps = false;

    public function  system_page(){
        return $this->belongsTo('App\System_control');
    }

    public function  owners(){
        return $this->belongsToMany('App\Owner');
    }

}
