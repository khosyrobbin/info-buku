<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $buku = BukuModel::where('judul', 'LIKE', "%$search%")
            ->orWhere('penerbit', 'LIKE', "%$search%")
            ->orWhere('tanggal_terbit', 'LIKE', "%$search%")
            ->orWhere('penulis', 'LIKE', "%$search%")
            ->get();
        return view('layouts.dataBuku', compact('buku'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuModel $buku)
    {
        return view('layouts.editBuku', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuModel $buku)
    {
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Upload gambar jika ada perubahan
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $gambarNama);
            // Hapus gambar lama jika ada
            if ($buku->gambar) {
                unlink(public_path('uploads/' . $buku->gambar));
            }
        } else {
            $gambarNama = $buku->gambar;
        }

        $buku->update([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'penulis' => $request->penulis,
            'tanggal_terbit' => $request->tanggal_terbit,
            'gambar' => $gambarNama,
        ]);

        return redirect()->route('home')->with('success', 'Data buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuModel $buku)
    {
        if ($buku->gambar) {
            unlink(public_path('uploads/' . $buku->gambar));
        }

        $buku->delete();

        return redirect()->route('home');
    }
}
