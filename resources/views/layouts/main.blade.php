<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="icon" type="image/png" href="{{ url('img/Logo-Komisi.png') }}">
    {{-- <link rel="icon" href="{{ url('img/favicon.ico') }}"> --}}

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite('resources/css/app.css')
    {{-- Phosphor Icons --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/fill/style.css" />
     {{-- <link rel="stylesheet" href="{{ asset('icons/phosphor-icons/bold/style.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/phosphor-icons/doutone/style.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/phosphor-icons/fill/style.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/phosphor-icons/light/style.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/phosphor-icons/reguler/style.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/phosphor-icons/thin/style.css') }}"> --}}

        <!-- include summernote css/js -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body id="container" class="m-0 p-0 w-full h-full opacity-0 transition-opacity duration-500 ease-in-out">
    @include('partials.alert-popup')
    @yield('container')
    <script src="{{ asset('js/inputImage.js') }}"></script>
    <script src="js/searchField.js"></script>
    <script src="js/animation.js"></script>
    <script src="{{ asset('js/systempage.js') }}"></script>
    <script src="js/inputField.js"></script>
    <script src="js/toggleSwitch.js"></script>
    <script src="js/dropdownPopup.js"></script>
    <script src="js/touchdragscroll.js"></script>
    <script src="js/year-indicator.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const content = document.getElementById('container');
        content.classList.add('opacity-100');
    });
    window.addEventListener("beforeunload", function() {
        const content = document.getElementById('content');
        content.classList.remove('opacity-100');
        content.classList.add('opacity-0');
    });
</script>
</html>
