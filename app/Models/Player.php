<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "steam_id",
        "player_cannibalism_id",
        "created_by",
        "canibalism_points",
        "rate_points"
    ];
}
