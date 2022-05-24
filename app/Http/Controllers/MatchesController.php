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

    # update the value of status field to 1 to start the match
    public function start_match($id){
        $match = Matches::findOrFail($id);
        $match->status = 1;
        $match->save();
        return redirect()->back()->with('status',"Match started");
    }

    # update the value of status field to 0 to end the match 
    public function end_match($id){
        $match = Matches::findOrFail($id);
        $match->status = 0;
        $match->save();
        return redirect()->back()->with('status',"Match ended");
    }
}
?>
