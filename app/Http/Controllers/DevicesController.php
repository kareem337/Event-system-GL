<?php

namespace App\Http\Controllers;

use App\Models\Devices;

class DevicesController extends Controller
{
    public function get_devices($id){
        
        $devices['data'] = Devices::where('game_id', '=', $id)->get();
        return response()->json($devices);
    }
}
