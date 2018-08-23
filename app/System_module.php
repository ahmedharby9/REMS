<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System_module extends Model
{
    public $table = "system_modules";
//    public $timestamps = false;

    public function  system_sub_modules(){
        return $this->hasMany('App\System_sub_module');
    }

    public function  owners(){
        return $this->belongsToMany('App\Owner');
    }
}
