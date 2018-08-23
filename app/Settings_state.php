<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_state extends Model
{
    //
    public $table = 'settings_state';

    public function settings_country()
    {
        return $this->belongsTo('App\Settings_country');
    }

    public function settings_city()
    {
        return $this->hasMany('App\Settings_city');
    }
}
