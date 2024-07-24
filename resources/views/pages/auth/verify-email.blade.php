@extends('layouts.main')
@section('container')
    <div class="w-screen h-screen p-4 md:p-8 bg-netral-100 shadow justify-center flex flex-col items-center">
            <div class="w-96 h-fit bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-bold mb-4">Verifikasi Email Anda</h2>
                <p class="mb-4">Sebelum melanjutkan, silakan periksa email Anda untuk link verifikasi.</p>
                @if (session('message'))
                    <div class="mb-4 text-green-600">
                        {{ session('message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="w-full bg-primary-base text-white py-2 rounded">Kirim Ulang Email Verifikasi</button>
                </form>
            </div>
    </div>
@endsection
