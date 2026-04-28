<x-app>


    <x-slot:title> {{ $title }}</x-slot>



    <form method="POST" action="{{ route('buku.update', $buku) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_buku" class="form-label">ID_BUKU</label>
            <input type="number" class="form-control @error('id_buku') is-invalid @enderror" name="id_buku" id="id_buku"
                value="{{ old('id_buku', $buku->id_buku) }}">
            @error('id_buku')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul_Buku</label>
            <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku"
                id="judul_buku" value="{{ old('judul_buku', $buku->judul_buku) }}">
            @error('judul_buku')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis"
                id="penulis" value="{{ old('penulis', $buku->penulis) }}">
            @error('penulis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit"
                id="penerbit" value="{{ old('penerbit', $buku->penerbit) }}">
            @error('penerbit')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>

            <input type="date" class="form-control @error('tanggal_terbit') is-invalid @enderror"
                name="tanggal_terbit" id="tanggal_terbit"
                value="{{ old('tanggal_terbit', date('Y-m-d', strtotime($buku->tanggal_terbit))) }}">

            @error('tanggal_terbit')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>



        <a class="btn btn-warning" href="{{ route('buku.index') }}" role="button">Cancel</a>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</x-app>
