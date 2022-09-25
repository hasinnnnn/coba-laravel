@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Halaman Postingan</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3">

            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h2>
            <a href="/authors/{{ $post->authors->username }}" class="text-decoration-none">
                <h5>{{ $post->user->name }}</h5>
            </a>
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                <p>Kategori : {{ $post->category->name }}</p>
            </a>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                Read More....
            </a>
        </article>
    @endforeach
@endsection
