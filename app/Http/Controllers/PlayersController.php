<?php

namespace App\Http\Controllers;

use App\Models\Players;
use App\Models\Game;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function edit_score(Request $request){
        $p1 = Players::findOrFail(session('p1_id'));
        $p1->score += $request->p1_score;
        $p1->save();

        $p2 = Players::findOrFail(session('p2_id'));
        $p2->score += $request->p2_score;
        $p2->save();
        return redirect('/matches')->with('status',"Match Ended");
    }

}
