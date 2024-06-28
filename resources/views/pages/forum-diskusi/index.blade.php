@extends('layouts.main')
@include('partials.navbar')
@include('partials.navbar-mobile')
@section('container')
    @include('partials.forum-diskusi.index-content')
    @include('partials.footer')
@endsection
@section('after-script')
    <script src="{{ asset('js/searchField.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/dropdownPopup.js') }}"></script>
    <script src="{{ asset('js/touchdragscroll.js') }}"></script>
@endsection
