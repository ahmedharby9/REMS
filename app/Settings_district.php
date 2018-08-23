<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_district extends Model
{
    //
    public $table = 'settings_district';

    public function settings_city()
    {
        return $this->belongsTo('App\Settings_city');
    }

    public function settings_zone()
    {
        return $this->hasMany('App\Settings_zone');
    }
}
