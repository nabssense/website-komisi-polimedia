@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    {{-- Section 1 Headline --}}
    @include('partials.beranda.headline-news-section')
    {{-- Section 2 Logo --}}
    @include('partials.beranda.logo-section')
    {{-- Section 3 Berita --}}
    @include('partials.berita-content')
    {{-- Section 4 Forum Diskusi --}}
    @include('partials.forum-diskusi.index')
    {{-- Section 5 Tentang Komisi --}}
    @include('partials.tentang-komisi-content')
    @include('partials.footer')
    
@endsection
