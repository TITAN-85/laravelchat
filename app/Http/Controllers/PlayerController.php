<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Action;
// use Illuminate\Support\Facades\Auth;
// use Barryvdh\DomPDF\Facade\PDF;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPlayers = Player::all();
        // $playerComments = Comment::all();
        // dd($allPlayers);
        // dd($playerComments);

        // $query = Comment::select()
        //         ->leftjoin('players', 'player_id', '=', 'comment_player_id' )
        //         ->get();

        // dd($query);
        // return view('players.index', ['players' => $query]);
        return view('players.index', ['players' => $allPlayers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request);
        
        $newPlayer = Player::create([
            "name" => $request->playerName,
            "steam_id" => $request->playerSteamId,
            "player_cannibalism_id" => 1,
            "created_by" => Auth::user()->id
        ]);

        return redirect(route('players-index', $newPlayer->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        dd($player);

        $allComments = Comment::select()
        ->where('comment_player_id', '=', $player->id)
        ->get();
        // dd($allComments);

        // $allComments = Comment::all();

        return view('players.show', ['comments' => $allComments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
