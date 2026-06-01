<x-app>

    <x-slot:title>
        Tambah Data Kategori
    </x-slot>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="{{ old('nama_kategori') }}">
        </div>

        <div class="mb-3">
            <label>Kode Kategori</label>
            <input type="text" name="kode_kategori" class="form-control" value="{{ old('kode_kategori') }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ old('deskripsi') }}</textarea>
        </div>

        <a href="{{ route('kategori.index') }}" class="btn btn-warning">
            Back
        </a>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</x-app>
