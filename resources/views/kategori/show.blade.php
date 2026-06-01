<x-app :title="$title">

    <div class="card">

        <div class="card-body">

            <ul class="list-group mb-3">

                <li class="list-group-item">
                    <strong>Nama Kategori :</strong>
                    {{ $kategori->nama_kategori }}
                </li>

                <li class="list-group-item">
                    <strong>Kode Kategori :</strong>
                    {{ $kategori->kode_kategori }}
                </li>

                <li class="list-group-item">
                    <strong>Deskripsi :</strong>
                    {{ $kategori->deskripsi }}
                </li>

                <li class="list-group-item">
                    <strong>Dibuat :</strong>
                    {{ $kategori->created_at->format('d F Y H:i') }}
                </li>

                <li class="list-group-item">
                    <strong>Diupdate :</strong>
                    {{ $kategori->updated_at->diffForHumans() }}
                </li>

            </ul>

            <a href="{{ route('kategori.index') }}" class="btn btn-warning">
                Back
            </a>

        </div>

    </div>

</x-app>
