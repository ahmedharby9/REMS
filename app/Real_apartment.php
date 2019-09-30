<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Real_apartment extends Model
{
    protected $table = "real_apartments";
    protected $fillable = [
        'model_id', 'section_id', 'department_id', 'place_id', 'compound_id',
        'type_build_id', 'unit_id', 'floor_id', 'finish_id', 'type_rent_id',
        'business_id', 'statu_id', 'received_data', 'received_data', 'state_id', 'city_id',
        'district_id', 'zone_id', 'location', 'lat_id', 'long_id', 'customer_id', 'view', 'trash_date'
    ];
}
