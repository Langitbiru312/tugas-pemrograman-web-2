<x-app>

    <x-slot:title>
        Data Kategori
    </x-slot>

    <a href="#" class="btn btn-primary mb-3">
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

                <button class="btn btn-warning btn-sm">
                    Edit
                </button>

                <button class="btn btn-danger btn-sm">
                    Delete
                </button>

                <button class="btn btn-info btn-sm text-white">
                    Detail
                </button>

            </li>
        @endforeach

    </ul>

    <div class="mt-3">
        {{ $kategoris->links() }}
    </div>

</x-app>
