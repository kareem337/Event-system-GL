<?php
namespace App\Http\Controllers;

use App\Models\Game;
use Exception;
use Illuminate\Http\Request;
class GamesController extends Controller {
    
    public function games(){
        return view('games');
    }

    public function create(Request $request){
		$request->validate([
			'game'=>"string|required",
			'slot'=>"string|required",
			'datetime'=>"required",
		]);
		$data = $request->input();
		try{
		$g = new Game;
		$g->game = $data['game'];
		$g->slot = $data['slot'];
		$g->dateTime = $data['datetime'];
		$g->save();
		return redirect()->back()->with('success',"Insert successfully");
		}catch(Exception $e){
			return redirect()->back()->with('failure',"Error in insertion");
		}
		
    }
    
}