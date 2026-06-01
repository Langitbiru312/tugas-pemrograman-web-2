<x-app :title="$title">

    <div class="container mt-5" style="max-width: 800px;">

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control"
                    value="{{ old('nama_kategori', $kategori->nama_kategori) }}">

                @error('nama_kategori')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Kode Kategori</label>
                <input type="text" name="kode_kategori" class="form-control"
                    value="{{ old('kode_kategori', $kategori->kode_kategori) }}">

                @error('kode_kategori')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>

                <textarea name="deskripsi" class="form-control" rows="4">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>

                @error('deskripsi')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <a href="{{ route('kategori.index') }}" class="btn btn-warning">
                Back
            </a>

            <button type="submit" class="btn btn-primary">
                Update
            </button>

        </form>

    </div>

</x-app>
