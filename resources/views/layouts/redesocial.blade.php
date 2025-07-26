@php
$tema = request()->cookie('theme', 'light');
@endphp

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    @livewireStyles
    <title>@yield('title')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- CSS global -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS específico por view -->
    @yield('css')
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: {{$tema}}">
@livewireScripts

    <header class="bg-primary text-white p-4">

        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-6">
                <h1>@yield('namepage')</h1>
            </div>

            <div class="col-4 d-flex justify-content-end">
                <a href="{{ route('altera_tema') }}" aria-label="Alternar tema" role="button">
                    @if ($tema === 'white')
                    🌑
                    @else
                    ☀️
                    @endif
                </a>



            </div>
        </div>

    </header>

    <main class="flex-fill p-4">
        @yield('content')
    </main>

    <footer class="bg-primary text-white p-4 text-end">
        &copy; {{ date('Y') }} By Eduardo Cintas
    </footer>


</body>
<script>
    feather.replace()
</script>

</html>