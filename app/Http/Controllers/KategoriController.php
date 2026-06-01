<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $kategoris = Kategori::when($keyword, function ($query) use ($keyword) {

            $query->where(
                'nama_kategori',
                'like',
                '%' . $keyword . '%'
            );

        })
        ->paginate(5)
        ->withQueryString();

        return view('kategori.index', [

            'title' => 'Data Kategori',

            'kategoris' => $kategoris

        ]);
    }

    public function create()
{
    return view('kategori.create', [
        'title' => 'Tambah Data Kategori'
    ]);
}

public function store(Request $request)
{
    $validated = $request->validate([
        'nama_kategori' => 'required|max:100',
        'kode_kategori' => 'required|max:20',
        'deskripsi' => 'required',
    ]);

    Kategori::create($validated);

    return redirect()
        ->route('kategori.index')
        ->with('success', 'Data kategori berhasil ditambahkan');
}
}