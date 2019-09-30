<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Real_action extends Model
{
    protected $table = "real_actions";
    protected $fillable = [
        'real_id', 'publish', 'rent_sale', 'status', 'distinction', 'view', 'trash_date'
    ];
}
