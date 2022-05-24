<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableTimes extends Model
{
    use HasFactory;
    protected $table = 'available_times';
    protected $fillable = [
        'id', 'device_id','time',
    ];
}
