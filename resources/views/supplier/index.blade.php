<x-app :title="$title">

    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">
        Create
    </a>

    <div class="d-flex justify-content-between mb-3">


        <a href="{{ route('supplier.trash') }}" class="btn btn-danger">
            Trash
        </a>
    </div>

    <form action="{{ route('supplier.index') }}" method="GET">

        <div class="row mb-3">

            <div class="col-md-7">
                <input type="text" name="keyword" class="form-control" placeholder="Cari supplier..."
                    value="{{ request('keyword') }}">
            </div>

            <div class="col-md-3">

                <select name="kategori_id" class="form-select">

                    <option value="">-- Semua Kategori --</option>

                    @foreach ($kategoris->unique('nama_kategori') as $kategori)
                        <option value="{{ $kategori->id }}"
                            {{ request('kategori_id') == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach

                </select>

            </div>

            <div class="col-md-2">

                <button type="submit" class="btn btn-success w-100">
                    Search
                </button>

            </div>

        </div>

    </form>

    <div class="card shadow-sm">

        <div class="card-header">
            <h5 class="mb-0">Data Supplier</h5>
        </div>

        <div class="card-body p-0">

            <table class="table table-striped table-hover mb-0">

                <thead class="table-dark">

                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Kategori</th>
                        <th width="250">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($suppliers as $supplier)
                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $supplier->nama_supplier }}</td>

                            <td>{{ $supplier->telepon }}</td>

                            <td>{{ $supplier->email }}</td>

                            <td>{{ $supplier->kategori->nama_kategori }}</td>

                            <td>

                                <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data supplier ini?')">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center py-3">
                                Data supplier tidak ditemukan
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
