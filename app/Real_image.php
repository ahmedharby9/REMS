<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Real_image extends Model
{
    protected $table = "real_images";
    protected $fillable = ['album_id', 'title', 'path', 'view', 'trash_date'];
}
