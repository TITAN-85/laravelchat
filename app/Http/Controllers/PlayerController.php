<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Action;
// use Illuminate\Support\Facades\Auth;
// use Barryvdh\DomPDF\Facade\PDF;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
use Illuminate\Routing\Route;
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
        // $allPlayers = Player::paginate('15');
        $allPlayers = Player::all();
        // dd($allPlayers);
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
        $request->validate([
            "playerName" => 'required',
        ]);

        // dd($request->playerName);


        // $validated = validator($request->all(), [
        //     "name" => ['required', 'min:2', 'max:40'],
        //     // "steam_id" => 'max:50'
        // ]);
        // dd($validated);


        $player = Player::where('name', $request->playerName)->first();
        // dd($player);
        if ($player) {

            return redirect(route('players.index'));
        } else {
            $newPlayer = Player::create([
                "name" => $request->playerName,
                "steam_id" => $request->playerSteamId,
                "player_cannibalism_id" => 1,
                "created_by" => Auth::user()->id,
                "canibalism_points" => 0,
                "rate_points" => 20
            ]);

            return redirect(route('players.index', $newPlayer->id));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player, Request $request)
    {
        $idFromRoute = $request->route('players');
        $player = Player::paginate('2');
        $player = Player::select()->where('player_id', $idFromRoute)->get();
        $allComments = Comment::select()
            ->join('players', 'comment_player_id', '=', 'player_id')
            ->where('comment_player_id', '=', $idFromRoute)
            ->get();
        $allComments->player = $player;

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
        dd($player);
        $player->update([
            "rate_points" => $request->rate,
            // "canibalism_points" => $request->playerName
        ]);
        return redirect(route('players.show', $player->id));
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

    /**
     * Search the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // $request->validate([
        //     "name" => 'required|min:2|max:50'
        // ]);
        // Player::paginate('15')
        $search = $request->search;
        // $search = $_GET['search'];
        // dd($search);

        // $player = Player::where()->orderBy('name')->paginate(10)
        $players = Player::where('name', 'LIKE', "%{$search}%")->get();

        // dd($players);

        return view('players.index', ['players' => $players]);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function rate(Request $request, Player $player)
    {
        $rate = $request->rate;

        $previousUrl = session()->get('url.intended', url()->previous());
        $previousId = null;
        if (str_contains($previousUrl, '/players/')) {
            $previousId = substr($previousUrl, strpos($previousUrl, '/players/') + 9);
        }
        session()->put([
            'id' => $previousId
        ]);

        if ($rate > 5 || $rate < -5 ) {
            return redirect(route('players.show', $previousId ));
        }
        $actualoints = Player::where('player_id', $previousId)->pluck('rate_points');

        $rate = $rate + $actualoints[0];
        Player::where('player_id', $previousId)->update(['rate_points' => $rate]);

        $player = Player::select()->where('player_id', $previousId)->get();
        $allComments = Comment::select()
            ->join('players', 'comment_player_id', '=', 'player_id')
            ->where('comment_player_id', '=', $previousId)
            ->get();

        $allComments->player = $player;

        return redirect(route('players.show', $previousId ));
    }
}
