<x-app>


    <x-slot:title> {{ $title }}</x-slot>
    <ul class="list-group">
        @foreach ($bukus as $buku)
            <li class="list-group-item">
                {{ $loop->iteration }}. {{ $buku->id_buku }} -- {{ $buku->judul_buku }} -- {{ $buku->penulis }} --
                {{ $buku->penerbit }} --
                {{ $buku->Tahun_terbit }}
            </li>
        @endforeach

    </ul>


</x-app>
