<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_floor extends Model
{
    //
    public $table = 'settings_floor';

    public function settings_type_build()
    {
        return $this->belongsTo('App\Settings_type_build');
    }

}
