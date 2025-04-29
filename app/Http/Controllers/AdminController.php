<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Game;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('games.index');
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');

        $games = Game::all();
        return view('admin.dashboard', compact('games'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'link' => 'nullable|string',
        ]);

        $data = $request->only(['nama', 'harga', 'deskripsi', 'link']);

        if ($request->hasFile('gambar')) {
            $fileName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);
            $data['gambar'] = $fileName;
        }

        Game::create($data);
        return redirect()->route('admin.dashboard')->with('success', 'Game ditambahkan!');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('admin.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->nama = $request->nama;
        $game->harga = $request->harga;
        $game->deskripsi = $request->deskripsi;
        $game->link = $request->link;

        if ($request->hasFile('gambar')) {
            $fileName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);
            $game->gambar = $fileName;
        }

        $game->save();
        return redirect()->route('admin.dashboard')->with('success', 'Game diupdate!');
    }
}

