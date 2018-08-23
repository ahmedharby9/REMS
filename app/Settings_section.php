<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_section extends Model
{
    //
    public $table = 'settings_section';

    public function settings_business()
    {
        return $this->hasMany('App\Settings_business');
    }

    public function settings_department()
    {
        return $this->hasMany('App\Settings_department');
    }

    public function settings_place()
    {
        return $this->hasMany('App\Settings_place');
    }

    public function settings_status()
    {
        return $this->hasMany('App\Settings_status');
    }

    public function settings_type_build()
    {
        return $this->hasMany('App\Settings_type_build');
    }
}
