<?php

namespace App\Http\Controllers;

use App\Models\Matches;

class MatchesController extends Controller
{
    # select all the matches exists
    public function dashboard(){
        $matches = Matches::with('match_game_type')->get();
        return view('dashboard', ['matches'=>$matches]);
    }

    # select only the matches that will start from today untill the end of the matches 
    public function from_today_matches(){
        $matches = Matches::whereDate('datetime', '=', now()->toDateString())->get();
        return view('matches', ['matches'=>$matches]);
    }
}
?>
