
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{  $category }}</h1>
    {{-- <h1>Halaman Home</h1>
    <h3>Syifa Alhikami</h3>
    <p>Syifaboy@yahoo.com</p> --}}

    {{-- dengan array --}}
    <h3><?= $name; ?></h3>
    <p><?= $email; ?></p>


    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">

    @foreach ($categories as $category)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{ $categories->slug }}"> {{ $category->name }}</a>
            </h2>
        </li>
    </ul>
        <article class="mb-5">

            <h5>By :{{ $post["author"] }}</h5>
            <p>{{ $post->excerpt }}</p>

        </article>
    @endforeach
    <script src="js/script.js"></script>
@endsection

