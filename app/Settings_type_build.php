<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_type_build extends Model
{
    //
    public $table = 'settings_type_build';

    public function settings_section()
    {
        return $this->belongsTo('App\Settings_section');
    }

    public function settings_unit()
    {
        return $this->hasMany('App\Settings_unit');
    }

    public function settings_floor()
    {
        return $this->hasMany('App\Settings_floor');
    }
}
