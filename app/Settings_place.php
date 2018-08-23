<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_place extends Model
{
    //
    public $table = 'settings_place';

    public function settings_section()
    {
        return $this->belongsTo('App\Settings_section');
    }

    public function settings_compound()
    {
        return $this->hasMany('App\Settings_compound');
    }

}
