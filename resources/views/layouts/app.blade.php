<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropertyUpdates - @yield('title')</title>

    {{-- Load CSS files through Vite --}}
    @vite(['resources/sass/app.scss',  'resources/css/custom.css'])

    {{-- Load third-party CSS files directly from public folder --}}
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emoji.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

    @stack('styles') {{-- Allow additional styles in specific pages --}}
</head>
<body>
    {{-- Header partial --}}
    @include('partials.header')

    {{-- Main content --}}
    <div class="content">

        @yield('content')
    </div>

    {{-- Footer partial --}}
    @include('partials.footer')

    {{-- Load JS files through Vite --}}
    @vite(['resources/js/app.js', 'resources/js/custom.js'])

    {{-- Load third-party JS files directly from public folder --}}
    <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>

    @stack('scripts') {{-- Allow additional scripts in specific pages --}}
</body>
</html>
