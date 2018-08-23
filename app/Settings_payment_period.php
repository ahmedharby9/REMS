<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_payment_period extends Model
{
    //
    public $table = 'settings_payment_period';

    public function settings_payment()
    {
        return $this->belongsTo('App\Settings_payment');
    }

    public function settings_premiums()
    {
        return $this->hasMany('App\Settings_premiums');
    }

    public function settings_propulsion()
    {
        return $this->hasMany('App\Settings_propulsion');
    }
}
