<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_business extends Model
{
    //
    public $table = 'settings_business';

    public function settings_section()
    {
        return $this->belongsTo('App\Settings_section');
    }

}
