<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System_sub_module extends Model
{
    public $table = "System_sub_modules";
//    public $timestamps = false;

    public function  system_module(){
        return $this->belongsTo('App\System_module');
    }

    public function  system_pages(){
        return $this->hasMany('App\System_page');
    }

    public function  owners(){
        return $this->belongsToMany('App\Owner');
    }
}
