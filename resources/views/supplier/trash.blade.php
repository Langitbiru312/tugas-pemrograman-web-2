<x-app :title="$title">
    <div class="d-flex justify-content-between mb-3">

        <h3>Data Supplier Trash</h3>

        <a href="{{ route('supplier.index') }}" class="btn btn-primary">
            Kembali
        </a>

    </div>


    <div class="card shadow-sm">

        <div class="card-body p-0">

            <table class="table table-striped table-hover mb-0">

                <thead class="table-dark">

                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Deleted At</th>
                        <th width="150">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($suppliers as $supplier)
                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $supplier->nama_supplier }}</td>

                            <td>{{ $supplier->telepon }}</td>

                            <td>{{ $supplier->email }}</td>

                            <td>{{ $supplier->deleted_at }}</td>

                            <td>

                                <form action="{{ route('supplier.restore', $supplier->id) }}" method="POST">

                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn btn-success btn-sm">
                                        Restore
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center py-3">
                                Data trash kosong
                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <div class="mt-3">
        {{ $suppliers->links() }}
    </div>
    ```

</x-app>
