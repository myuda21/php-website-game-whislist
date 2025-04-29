<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     public function show($id)
    {
        $game = Game::findOrFail($id);  // Menangkap game berdasarkan ID
        return view('show', compact('game'));  // Mengirimkan game ke view show
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }

    public function rawgGames(Request $request)
    {
        // Ambil parameter, dengan default
        $search   = $request->query('search', '');
        $page     = $request->query('page', 1);
        $pageSize = $request->query('page_size', 10);

        $response = Http::get(config('services.rawg.url') . '/games', [
            'key' => config('services.rawg.key')
        ]);

        // ambil hasil
        $rawgGames = $response->json()['results'];

        // lempar ke view nama variabel rawgGames
        return view('rawg', compact('rawgGames'));
    }
}
