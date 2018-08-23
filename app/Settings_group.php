<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_group extends Model
{
    //
    public $table = 'settings_group';

    public function settings_multi_choice()
    {
        return $this->hasMany('App\Settings_multi_choice');
    }

    public function settings_one_choice()
    {
        return $this->hasMany('App\Settings_one_choice');
    }
}
