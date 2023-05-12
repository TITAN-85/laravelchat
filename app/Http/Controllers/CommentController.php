<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPlayers = Comment::select()
            ->where()
            ->get();

        return view('players.index', ['players' => $allPlayers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $previousUrl = session()->get('url.intended', url()->previous());
        $previousId = null;

        if (str_contains($previousUrl, '/players/')) {
            $previousId = substr($previousUrl, strpos($previousUrl, '/players/') + 9);
        }
        // dd($previousId);

        session()->put([
            // 'url.intended' => url()->full(),
            'id' => $previousId
        ]);
        // dd(session());
        // $pathInfo = $request->path();
        $idFromRoute = $request;


        // $player = Player::select()->where('player_id', $idFromRoute)->get();
        // dd($request);
        return view('comments.create', ['previousId' => $previousId]);
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

        $newPlayer = Comment::create([
            "title" => $request->commentTitle,
            "comment" => $request->commentInput,
            "comment_player_id" => $request->commentPlayerId,
            "comment_user_id" => Auth::user()->id
        ]);
        return redirect(route('players-index', $newPlayer->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        // dd($comment);

        // $allComments = Comment::select()
        // ->where('comment_player_id', '=', $comment->id)
        // ->get();
        // dd($allComments);

        // // $allComments = Comment::all();

        // return view('players.show', ['comments' => $allComments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
