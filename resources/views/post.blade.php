@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-4">{{ $post->title }}</h1>
                <p>By : <a href="/blog?authors={{ $post->authors->username }}" class=" text-decoration-none">
                        {{ $post->user->name }}
                    </a> - Kategori :
                    <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>
                <img src="https://source.unsplash.com/random/1200x500?sig=${Math.random()}"
                    class="card-img-top mb-4 img-fluid" alt="{{ $post->category->name }}">
                <article class="fs-6">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="text-decoration-none">back to post</a>
            </div>
        </div>
    </div>
@endsection
