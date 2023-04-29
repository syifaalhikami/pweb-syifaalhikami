@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
     {{-- <h1>Halaman About</h1>
    <h3>Syifa Alhikami</h3>
    <p>Syifaboy@yahoo.com</p> --}}

    {{-- Dengan Templeting Blade Machine--}}
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>


<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img=thumnail rounded-circle">

    <script src="js/script.js"></script>
@endsection
