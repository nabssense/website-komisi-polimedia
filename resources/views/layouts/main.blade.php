<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="icon" type="image/png" href="{{ url('img/Logo-Komisi.png') }}">
    {{-- <link rel="icon" href="{{ url('img/favicon.ico') }}"> --}}

    <!-- Fonts -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- Phosphor Icons --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    
    <!-- include summernote css/js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
{{-- opacity-0 transition-opacity duration-500 ease-in-out --}}

<body id="container" class="m-0 p-0 w-full h-full t">
    @include('partials.pop-up.alert')
    @yield('container')
    @yield('after-script')

</body>
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const content = document.getElementById('container');
        content.classList.add('opacity-100');
    });
    window.addEventListener("beforeunload", function() {
        const content = document.getElementById('content');
        content.classList.remove('opacity-100');
        content.classList.add('opacity-0');
    });
</script> --}}

<script src="{{ asset('js/systempage.js') }}"></script>

</html>
{{-- <script src="{{ asset('js/inputTextArea.js') }}"></script>
<script src="{{ asset('js/inputImagePreview.js') }}"></script>
<script src="{{ asset('js/inputTextArea.js') }}"></script>
<script src="{{ asset('js/inputPassword.js') }}"></script>
<script src="{{ asset('js/discussionPopup.js') }}"></script>
<script src="{{ asset('js/discussionCategory.js') }}"></script>
<script src="{{ asset('js/discussionFunction.js') }}"></script>
<script src="{{ asset('js/discussionLike.js') }}"></script>
<script src="{{ asset('js/discussionSort.js') }}"></script>
<script src="{{ asset('js/inputImage.js') }}"></script>
<script src="{{ asset('js/searchField.js') }}"></script>
<script src="{{ asset('js/animation.js') }}"></script>
<script src="{{ asset('js/systempage.js') }}"></script>
<script src="{{ asset('js/inputField.js') }}"></script>
<script src="{{ asset('js/toggleSwitch.js') }}"></script>
<script src="{{ asset('js/dropdownPopup.js') }}"></script>
<script src="{{ asset('js/touchdragscroll.js') }}"></script>
<script src="{{ asset('js/year-indicator.js') }}"></script> --}}
