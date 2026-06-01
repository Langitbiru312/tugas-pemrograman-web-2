<x-app :title="$title">

    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control"
                value="{{ old('nama_supplier', $supplier->nama_supplier) }}">
        </div>

        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $supplier->telepon) }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $supplier->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Kategori</label>

            <select name="kategori_id" class="form-control">
                <option value="">-- Pilih Kategori --</option>

                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}"
                        {{ old('kategori_id', $supplier->kategori_id) == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <a href="{{ route('supplier.index') }}" class="btn btn-warning">
            Back
        </a>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

</x-app>
