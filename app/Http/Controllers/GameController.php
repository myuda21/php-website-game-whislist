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
        return view('index');
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

    public function gamePage()
    {
        $games = Game::all();
        return view('gamePage', compact('games'));
    }

    public function rawgGames(Request $request)
    {
        // Ambil query string untuk search, page dan page_size
        $search = $request->query('search', '');  // Default kosong
        $page = $request->query('page', 1);  // Default halaman 1
        $pageSize = $request->query('page_size', 10);  // Default 10 data per halaman

        // Kirim request ke API RAWG
        $response = Http::get(config('services.rawg.url') . '/games', [
            'key' => config('services.rawg.key'),
            'search' => $search,
            'page' => $page,
            'page_size' => $pageSize,
        ]);

        // Ambil data dari hasil response API
        $rawgGames = $response->json()['results'] ?? [];

        // Ambil metadata pagination
        $total = $response->json()['count'] ?? 0;
        $lastPage = (int) ceil($total / $pageSize);

        // Kembalikan view dengan data dan pagination
        return view('rawg', compact('rawgGames', 'search', 'page', 'pageSize', 'lastPage'));
    }
}
