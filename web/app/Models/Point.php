<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'cpu',
        'ram',
        'disk',
        'battery',
        'location',
        'uptime',
        'so',
        'device_id',
    ];
}
