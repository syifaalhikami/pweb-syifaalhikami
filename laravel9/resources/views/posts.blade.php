
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
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a>
            </h2>
            <p> By <a href="#">{{ $post->user->name }}</a>in <a href="/categories/{{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a></p>

            {{-- <h5>By :{{ $post["author"] }}</h5> --}}
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
    <script src="js/script.js"></script>
@endsection

