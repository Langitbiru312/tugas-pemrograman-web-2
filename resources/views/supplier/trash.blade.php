<x-app :title="$title">

    <h3>Data Supplier Trash</h3>

    <a href="{{ route('supplier.index') }}" class="btn btn-primary mb-3">
        Kembali
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Email</th>
                <th>Deleted At</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($suppliers as $supplier)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $supplier->nama_supplier }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->deleted_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Data trash kosong
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</x-app>
