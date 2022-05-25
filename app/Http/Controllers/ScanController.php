<?php

namespace App\Http\Controllers;

use App\Models\Scan;
use App\Models\AvailableTimes;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    
    public function match_scan(Request $request){
        Scan::insert(
            ['code' => $request->code, 'game_id' => $request->game, 'device_id' => $request->device, 'time' => $request->time]
        );
        AvailableTimes::where('device_id', '=' ,$request->device, 'AND', 'time', '=', $request->time)->first()->delete();
        return redirect()->back()->with('msg', 'Inserted Successfully');
    }
}
