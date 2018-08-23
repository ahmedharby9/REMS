<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_compound extends Model
{
    //
    public $table = 'settings_compound';

    public function settings_place()
    {
        return $this->belongsTo('App\Settings_place');
    }
}
