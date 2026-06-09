<x-app :title="$title">

    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">
        Create
    </a>

    <form action="{{ route('supplier.index') }}" method="GET">

        <div class="row mb-3">

            <div class="col-md-7">

                <input type="text" name="keyword" class="form-control" placeholder="Search supplier..."
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

    <div class="card">

        <div class="card-body p-0">

            @forelse ($suppliers as $supplier)
                <div class="border-bottom p-3">

                    {{ $loop->iteration }}.

                    {{ $supplier->nama_supplier }}

                    --

                    {{ $supplier->telepon }}

                    --
                    {{ $supplier->email }}

                    --
                    {{ $supplier->kategori->nama_kategori }}

                    <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data supplier ini?')">
                            Delete
                        </button>

                    </form>

                    <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-info btn-sm">
                        Detail
                    </a>

                </div>

            @empty

                <div class="p-3 text-center">

                    Data supplier tidak ditemukan

                </div>
            @endforelse

        </div>

    </div>

    <div class="mt-3">

        {{ $suppliers->links() }}

    </div>

</x-app>
