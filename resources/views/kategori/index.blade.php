<x-app>

    <x-slot:title>
        Data Kategori
    </x-slot>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">
        Create
    </a>

    <form action="{{ route('kategori.index') }}" method="GET">

        <div class="row mb-3">

            <div class="col-md-7">
                <input type="text" name="keyword" class="form-control" placeholder="Search kategori..."
                    value="{{ request('keyword') }}">
            </div>

            <div class="col-md-3">
                <button class="btn btn-success w-100">
                    Search
                </button>
            </div>

        </div>

    </form>

    <ul class="list-group">

        @foreach ($kategoris as $kategori)
            <li class="list-group-item">
                {{ $kategoris->firstItem() + $loop->index }}.

                {{ $kategori->nama_kategori }}
                --
                {{ $kategori->kode_kategori }}
                --
                {{ $kategori->deskripsi }}

                <a class="btn btn-warning btn-sm">Edit</a>
                <a class="btn btn-danger btn-sm">Delete</a>
                <a class="btn btn-info btn-sm">Detail</a>
            </li>
        @endforeach

    </ul>

    <div class="mt-3">
        {{ $kategoris->links() }}
    </div>

</x-app>
