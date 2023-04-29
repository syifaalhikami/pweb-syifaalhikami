
@extends('layouts.main')

@section('container')
    <h1>Halaman Posts</h1>
    {{-- <h1>Halaman Home</h1>
    <h3>Syifa Alhikami</h3>
    <p>Syifaboy@yahoo.com</p> --}}

    {{-- dengan array --}}
    <h3><?= $name; ?></h3>
    <p><?= $email; ?></p>


    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}"> {{ $post["title"] }}</a>
            </h2>
            <h5>By :{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
    <script src="js/script.js"></script>
@endsection

