<x-app>


    <x-slot:title> {{ $title }}</x-slot>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('buku.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($bukus as $buku)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $buku->id_buku }} -- {{ $buku->judul_buku }} -- {{ $buku->penulis }} --
                {{ $buku->penerbit }} --
                {{ $buku->tanggal_terbit }}
                <a class="btn btn-warning btn-sm" href="{{ route('buku.edit', $buku->id_buku) }}" role="button">edit</a>
                <form action="{{ route('buku.destroy', $buku->id_buku) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf


                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm ('Anda yakin')">Delete</button>

                </form>
            </li>
        @endforeach

    </ul>


</x-app>
