<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_zone extends Model
{
    //
    public $table = 'settings_zone';

    public function settings_district()
    {
        return $this->belongsTo('App\Settings_district');
    }
}
