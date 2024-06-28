@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    @include('partials.tentang-komisi-content')
    @include('partials.footer')
@endsection
@section('after-script')
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
    <script src="{{ asset('js/year-indicator.js') }}"></script>
@endsection