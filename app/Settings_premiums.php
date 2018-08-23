<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_premiums extends Model
{
    //
    public $table = 'settings_premiums';

    public function settings_payment_period()
    {
        return $this->belongsTo('App\Settings_payment_period');
    }
}
