<x-app :title="$title">

    <table class="table table-bordered">

        <tr>
            <th width="30%">Nama Supplier</th>
            <td>{{ $supplier->nama_supplier }}</td>
        </tr>

        <tr>
            <th>Telepon</th>
            <td>{{ $supplier->telepon }}</td>
        </tr>

        <tr>
            <th>Email</th>
            <td>{{ $supplier->email }}</td>
        </tr>


        <tr>
            <th>Alamat</th>
            <td>{{ $supplier->alamat }}</td>
        </tr>

        <tr>
            <th>Kategori</th>
            <td>{{ $supplier->kategori->nama_kategori }}</td>
        </tr>

    </table>

    <a href="{{ route('supplier.index') }}" class="btn btn-warning">
        Back
    </a>

</x-app>
