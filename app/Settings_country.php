<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_country extends Model
{
    //
    public $table = 'settings_country';

    public function settings_state()
    {
        return $this->hasMany('App\Settings_state');
    }
}
