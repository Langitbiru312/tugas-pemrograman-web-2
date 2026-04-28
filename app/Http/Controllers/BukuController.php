<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        return view('buku.index', [
            'title' => 'Buku',
           'bukus' => Buku::latest()->get(),
            //'bukus' => Buku::orderBy('judul_buku', 'asc')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create', ['title' => 'Create Buku']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'id_buku' => 'required|digits:4|numeric',
        'judul_buku' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tanggal_terbit' => 'required|date',
        
    ], [
           'id_buku.required' => 'id tidak boleh kosong',
           'id_buku.digits' => 'id_buku wajib :digits digit',
           'id_buku.numeric' => 'id_buku wajib angka',
           'judul_buku.required' => 'judul buku tidak boleh kosong',
           'penulis.required' => 'penulis tidak boleh kosong',
           'penerbit.required' => 'penerbit tidak boleh kosong',
           'tanggal_terbit.required' => 'tanggal terbit tidak boleh kosong',
           'tanggal_terbit.date' => 'tanggal terbit tidak boleh kosong',

    ]);

    Buku::create($validated);
    
    return to_route('buku.index')->withSuccess('Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
       return view('buku.edit', [
            'title' => 'Edit Buku',
            'buku' => $buku,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
         $validated = $request->validate([
        'id_buku' => 'required|digits:4|numeric',
        'judul_buku' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tanggal_terbit' => 'required|date',
        
    ], [
           'id_buku.required' => 'id tidak boleh kosong',
           'id_buku.digits' => 'id_buku wajib :digits digit',
           'id_buku.numeric' => 'id_buku wajib angka',
           'judul_buku.required' => 'judul buku tidak boleh kosong',
           'penulis.required' => 'penulis tidak boleh kosong',
           'penerbit.required' => 'penerbit tidak boleh kosong',
           'tanggal_terbit.required' => 'tanggal terbit tidak boleh kosong',
           'tanggal_terbit.date' => 'tanggal terbit tidak boleh kosong',

    ]);

    $buku->update($validated);
    
    return to_route('buku.index')->withSuccess('Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
         $buku->delete($buku);
    
    return to_route('buku.index')->withSuccess('Data berhasil di hapus');
    }
}
