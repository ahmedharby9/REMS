<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_propulsion extends Model
{
    //
    public $table = 'settings_propulsion';

    public function settings_payment_period()
    {
        return $this->belongsTo('App\Settings_payment_period');
    }
}
