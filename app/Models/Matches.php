<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    // each match contains only 1 game
    public function match_game(){
        return $this->hasOne(Game:: class);
    }

    // each match contains a game and this game_id belongs to a game 
    public function match_game_type(){
        return $this->belongsTo(Game:: class, 'game_id', 'id');
    }

    // each match contains only 1 player
    public function match_players(){
        return $this->hasMany(Players:: class);
    }

    public function player_one(){
        return $this->belongsTo(Players:: class, 'player1', 'id');
    }

    public function player_two(){
        return $this->belongsTo(Players:: class, 'player2', 'id');
    }
}
?>
