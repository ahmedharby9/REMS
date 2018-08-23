<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System_page extends Model
{
    public $table = "system_pages";
//    public $timestamps = false;

    public function  system_sub_module(){
        return $this->belongsTo('App\System_sub_module');
    }

    public function  system_controls(){
        return $this->hasMany('App\System_control');
    }

    public function  owners(){
        return $this->belongsToMany('App\Owner');
    }
}
