<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devicelogs extends Model
{
    protected $table = "devicelogs";

    protected $fillable = [
        'temprature', 'humidity','device_id','lat','long'
    ];
}
