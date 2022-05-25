<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    use HasFactory;
    protected $table = 'scanned_codes';
    protected $fillable = [
        'id', 'code','game_id','device_id', 'time',
    ];
}
