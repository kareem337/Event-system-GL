<?php

namespace App\Http\Controllers;

use App\Models\AvailableTimes;
use Illuminate\Http\Request;

class AvailableTimesController extends Controller
{
    public function get_time($id){
        $time['data'] = AvailableTimes::where('device_id', '=', $id)->get();
        return response()->json($time);
    }
}
