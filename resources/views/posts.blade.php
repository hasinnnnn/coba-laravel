@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('authors'))
                    <input type="hidden" name="authors" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Post .." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count())
        <div class="card mb-3 mt-3">
            <a href="/posts/{{ $posts[0]->slug }}"><img
                    src="https://source.unsplash.com/random/1200x300?sig=${Math.random()}>" class="card-img-top"
                    alt="..."></a>
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-dark text-decoration-none">{{ $posts[0]->title }} </a>
                </h3>
                <p class="text-decoration-none">
                    <small class="text-muted">
                        By :
                        <a href="/blog?authors={{ $posts[0]->authors->username }}"
                            class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                        Kategori :
                        <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-success">
                    Read More
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white " style="background-color : rgba(0,0,0,0.7)">
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class=" text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            <a href="/posts/{{ $post->slug }}"><img
                                    src="https://source.unsplash.com/random/400x300?sig=${Math.random()}"
                                    class="card-img-top" alt="{{ $post->category->name }}"></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                        class="text-dark text-decoration-none">{{ $post->title }}</a></h5>
                                <p class="text-decoration-none">By :
                                    <a href="/blog?authors={{ $post->authors->username }}"
                                        class="text-decoration-none">{{ $post->user->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </p>
                                <p>{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                                    Read More....
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-6">no posts yet ..</p>
    @endif

    <div class="d-flex justify-content-center">{{ $posts->links() }}</div>

@endsection
