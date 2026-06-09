<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        'email' => 'required|email',
        'alamat' => 'required',
        'kategori_id' => 'required|exists:kategoris,id',
    ]);

    DB::transaction(function () use ($validated) {
        Supplier::create($validated);
    });

    return redirect()->route('supplier.index')
        ->with('success', 'Data supplier berhasil ditambahkan');
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
        'email' => 'required|email',
        'alamat' => 'required',
        'kategori_id' => 'required|exists:kategoris,id',
    ]);

    DB::transaction(function () use ($supplier, $validated) {
        $supplier->update($validated);
    });

    return redirect()->route('supplier.index')
        ->with('success', 'Data supplier berhasil diubah');
}


public function destroy(Supplier $supplier)
{
    $supplier->delete();

    return redirect()->route('supplier.index')
        ->with('success', 'Data supplier berhasil dihapus');
}
public function show(Supplier $supplier)
{
    return view('supplier.show', [
        'title' => 'Detail Data Supplier',
        'supplier' => $supplier
    ]);
}


public function trash()
{
    return view('supplier.trash', [
        'title' => 'Data Supplier Trash',
        'suppliers' => Supplier::onlyTrashed()->paginate(5)
    ]);
}
}