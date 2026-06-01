@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#f5f5f5;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">

            <a class="navbar-brand" href="#">
                PERPUSTAKAAN
            </a>

            <div class="navbar-nav ms-auto">

                <a class="nav-link {{ request()->is('buku*') ? 'active fw-bold' : '' }}"
                    href="{{ route('buku.index') }}">
                    Buku
                </a>

                <a class="nav-link {{ request()->is('kategori*') ? 'active fw-bold' : '' }}"
                    href="{{ route('kategori.index') }}">
                    Kategori
                </a>

            </div>

        </div>
    </nav>

    <div class="bg-primary text-white text-center py-5 mb-5">
        <h1 class="fw-bold">
            {{ $title }}
        </h1>
    </div>

    <div class="container">
        {{ $slot }}
    </div>

</body>

</html>
