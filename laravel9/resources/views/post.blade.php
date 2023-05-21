@extends('layouts.main')

@section('container')
    {{-- <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p> --}}

        <h1 class="mb-5">{{ $post->title }}</h1>

        <p> By Syifa <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
        {!! post->body !!}

    </article>
    <a href="/posts"> back to posts</a>
@endsection
