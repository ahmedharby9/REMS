<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Real_publisher extends Model
{
    protected $table = "real_publishers";
    protected $fillable = [
        'client_id', 'client_Real_id', 'client_view', 'client_like', 'actual_user', 'actual_owner', 'other_user', 'trash_date'
    ];
}
