<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_payment extends Model
{
    //
    public $table = 'settings_payment';

    public function settings_department()
    {
        return $this->belongsTo('App\Settings_department');
    }

    public function settings_payment_period()
    {
        return $this->hasMany('App\Settings_payment_period');
    }
}
