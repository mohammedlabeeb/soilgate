<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $table = "devices";

    protected $fillable = [
        'name', 'type', 'gate_id','device_id'
    ];
}
