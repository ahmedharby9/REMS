<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_multi_choice extends Model
{
    //
    public $table = 'settings_multi_choice';

    public function settings_group()
    {
        return $this->belongsTo('App\Settings_group');
    }
}
