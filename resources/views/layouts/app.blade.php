<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body.dark-mode {
            background-color: #121212; /* Ganti latar belakang untuk tema gelap */
            color: #ffffff; /* Ganti warna teks untuk tema gelap */
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
