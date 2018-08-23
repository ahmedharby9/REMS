<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_department extends Model
{
    //
    public $table = 'settings_department';

    public function settings_section()
    {
        return $this->belongsTo('App\Settings_section');
    }

    public function settings_type_rent()
    {
        return $this->hasMany('App\Settings_type_rent');
    }

    public function settings_payment()
    {
        return $this->hasMany('App\Settings_payment');
    }

    public function settings_finish()
    {
        return $this->hasMany('App\Settings_finish');
    }

}
