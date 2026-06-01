<x-app :title="$title">

    <div class="card">
        <div class="card-header">
            Tambah Supplier
        </div>

        <div class="card-body">

            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Supplier</label>
                    <input type="text" name="nama_supplier" class="form-control" value="{{ old('nama_supplier') }}">
                </div>

                <div class="mb-3">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="{{ old('telepon') }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Kategori</label>

                    <select name="kategori_id" class="form-control">
                        <option value="">-- Pilih Kategori --</option>

                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <a href="{{ route('supplier.index') }}" class="btn btn-warning">
                    Back
                </a>

                <button type="submit" class="btn btn-primary">
                    Save
                </button>

            </form>

        </div>
    </div>

</x-app>
