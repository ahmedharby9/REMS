<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_status extends Model
{
    //
    public $table = 'settings_status';

    public function settings_section()
    {
        return $this->belongsTo('App\Settings_section');
    }
}
