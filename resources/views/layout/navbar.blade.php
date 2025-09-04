<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <header>
        <h1>Beranda</h1>
        <nav>
            <ul>
                <li><a href="/">Welcome</a></li>
                <li><a href="/halo">Beranda</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
