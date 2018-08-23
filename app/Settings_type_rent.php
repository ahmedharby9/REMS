<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_type_rent extends Model
{
    //
    public $table = 'settings_type_rent';

    public function settings_department()
    {
        return $this->belongsTo('App\Settings_department');
    }
}
