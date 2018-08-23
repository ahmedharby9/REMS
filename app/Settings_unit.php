<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_unit extends Model
{
    //
    public $table = 'settings_unit';

    public function settings_type_build()
    {
        return $this->belongsTo('App\Settings_type_build');
    }

}
