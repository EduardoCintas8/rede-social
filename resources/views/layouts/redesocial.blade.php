<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- CSS global -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- CSS específico por view -->
    @yield('css')
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4">
        <h1>@yield('namepage')</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="bg-blue-600 text-white p-4 text-center">
        &copy; {{ date('Y') }} Eduardo Cintas
    </footer>
</body>
</html>
