<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_panel extends Model
{
    protected $table = 'control_panel';

    protected $fillable = [
         'username', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
