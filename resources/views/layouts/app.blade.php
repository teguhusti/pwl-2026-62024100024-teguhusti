<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Klinik')</title>
    
    <!-- Memanggil file CSS menggunakan asset() -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Memanggil partial navbar -->
    @include('partials.navbar')

    <main style="padding: 20px;">
        <!-- Tempat konten halaman lain dimasukkan -->
        @yield('content')
    </main>

    <!-- Memanggil partial footer -->
    @include('partials.footer')

</body>
</html>