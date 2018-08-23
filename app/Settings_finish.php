<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_finish extends Model
{
    //
    public $table = 'settings_finish';

    public function settings_department()
    {
        return $this->belongsTo('App\Settings_department');
    }
}
