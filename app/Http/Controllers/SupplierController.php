<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Kategori;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $keyword = request('keyword');
        $kategori_id = request('kategori_id');

        $suppliers = Supplier::with('kategori')

            ->when($keyword, function ($query) use ($keyword) {

                $query->where(
                    'nama_supplier',
                    'like',
                    '%' . $keyword . '%'
                );

            })

            ->when($kategori_id, function ($query) use ($kategori_id) {

                $query->where(
                    'kategori_id',
                    $kategori_id
                );

            })

            ->paginate(5)
            ->withQueryString();

        return view('supplier.index', [

            'title' => 'Data Supplier',

            'suppliers' => $suppliers,

            'kategoris' => Kategori::all()

        ]);

    }
    public function create()
{
    return view('supplier.create', [
        'title' => 'Tambah Data Supplier',
        'kategoris' => Kategori::all()
    ]);
}

public function store(Request $request)
{
   $validated = $request->validate([
    'nama_supplier' => 'required',
    'telepon' => 'required',
    'alamat' => 'required',
    'kategori_id' => 'required|exists:kategoris,id',
]);

    try {
        Supplier::create($validated);

        return redirect()->route('supplier.index')
            ->with('success', 'Data supplier berhasil ditambahkan');

    } catch (\Exception $e) {
        dd($e->getMessage());
    }
}
public function edit(Supplier $supplier)
{
    return view('supplier.edit', [
        'title' => 'Edit Data Supplier',
        'supplier' => $supplier,
        'kategoris' => Kategori::all()
    ]);
}
public function update(Request $request, Supplier $supplier)
{
    $validated = $request->validate([
        'nama_supplier' => 'required',
        'telepon' => 'required',
        'alamat' => 'required',
        'kategori_id' => 'required',
    ]);

    $supplier->update($validated);

    return redirect()->route('supplier.index')
        ->with('success', 'Data supplier berhasil diubah');
}
}