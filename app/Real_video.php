<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Real_video extends Model
{
    protected $table = "real_videos";
    protected $fillable = ['real_id','name','path','view','trash_date'];
}
