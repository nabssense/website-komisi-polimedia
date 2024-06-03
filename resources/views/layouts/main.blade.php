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
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
    </head>
    <body class="m-0 p-0 w-screen h-screen">
        <div class="w-screen h-screen {{ $active === 'Tambah Kabinet' || $active === 'Tambah Berita' || $active === 'Tambah Akun' || $active === 'Ajukan Pertanyaan' || $active === 'Ubah Komisi'  || $active === 'Masuk Akun' || $active === 'Daftar Akun' || $active === 'Testing' ? '' : 'pt-24' }}">
            @if ( $active === 'Profil' || $active === 'Kelola Website')
                @include('partials.akun-navigation')
                @yield('container')

                {{-- @elseif ( $active ===  'Daftar Akun' || $active === 'Masuk Akun')
                    @include('partials.navbar-login')
                    @yield('container') --}}
                
                @else
                    @yield('container')
            @endif
        </div>
        <script src="js/animation.js"></script>
        <script src="js/systempage.js"></script>
        <script src="js/inputField.js"></script>
        <script src="js/toggleSwitch.js"></script>
        <script src="js/dropdownPopup.js"></script>
        <script src="js/touchdragscroll.js"></script>
    </body>
</html>