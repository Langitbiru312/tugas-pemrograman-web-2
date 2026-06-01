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
}