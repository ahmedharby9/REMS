<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public $table = 'owners';
//    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password', 'limit_users', 'limit_admin', 'duration', 'domain_name', 'expiry_date', 'start_date',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function  system_modules(){
        return $this->belongsToMany('App\System_module');
    }
    public function  system_sub_modules(){
        return $this->belongsToMany('App\System_sub_module');
    }
    public function  system_pages(){
        return $this->belongsToMany('App\System_pages');
    }
    public function  owner_controls(){
        return $this->belongsToMany('App\Owner_control');
    }

}
