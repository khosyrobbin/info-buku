<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bukus = BukuModel::all();
        return view('layouts.home', compact('bukus'));
    }
    public function tentang()
    {
        return view('layouts.tentang');
    }

    public function create()
    {
        return view('layouts.tambahBuku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'penerbit' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $gambarNama);
        } else {
            $gambarNama = null;
        }

        BukuModel::create([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tanggal_terbit' => $request->tanggal_terbit,
            'gambar' => $gambarNama,
        ]);

        return redirect()->route('home')->with('success', 'Data buku berhasil disimpan.');
        dd($request->all());
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
