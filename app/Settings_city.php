<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_city extends Model
{
    //
    public $table = 'settings_city';

    public function settings_state()
    {
        return $this->belongsTo('App\Settings_state');
    }

    public function settings_district()
    {
        return $this->hasMany('App\Settings_district');
    }
}
