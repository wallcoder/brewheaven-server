<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $fillable = ['name', 'address', 'coordinate', 'open_time', 'close_time', 'phone'];
    protected $casts = [
        'coordinate' => 'array'
    ];
}
