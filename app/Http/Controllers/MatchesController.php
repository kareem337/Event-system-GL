<?php

namespace App\Http\Controllers;

use App\Models\Matches;

class MatchesController extends Controller
{
    public function index(){
        $matches = Matches::with('match_game_type')->get();
        return view('dashboard', ['matches'=>$matches]);
    }
}
?>
