<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gates extends Model
{
    protected $table = "gates";

    protected $fillable = [
        'name', 'info', 'user_id'
    ];

    
}
