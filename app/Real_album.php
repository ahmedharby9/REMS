<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Real_album extends Model
{
    protected $table = "real_albums";
    protected $fillable = ['real_id', 'name', 'view', 'trash_date'];
}
