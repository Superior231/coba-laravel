@extends('layouts.main')

@section('contents')
<section class="home pt-4">
    <div class="container">
        <h1 class="mb-3">{{ $title }}</h1>

        <!-- Search -->
        <form action="/posts" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="container-search" id="container-search">
                <input type="search" name="search" id="search" placeholder="Search here..." value="{{ request('search') }}" autocomplete="off">
                <button type="submit" class="btn-search">
                    <i class='bx bx-search'></i>
                </button>
            </div>
        </form>
        <!-- Search End -->

        @if ($posts->count() > 0)
            <div class="card mb-3 border border-1">
                <img src="/img/background.jpg" class="card-img-top" alt="{{ $posts[0]->category->name }}" height="300px">
                <div class="card-body">
                    <a href="/posts/{{ $posts[0]["slug"] }}" class="link">
                        <h2 class="judul">{{ $posts[0]->title }}</h2>
                    </a>
                    <h5 class="author">By: <a href="/authors/{{ $posts[0]->author->username }}" class="link-user">{{ $posts[0]->author->name }}</a></h5>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]["slug"] }}" class="link"><h6>Read more..</h6></a>
                </div>
                <div class="card-footer">
                    <!-- diffForHumans() untuk memformat waktu agar lebih mudah dibaca -->
                    <p class="card-text text-center"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                </div>
            </div>
        
            <div class="container px-0">
                <div class="row g-3">
                    @foreach ($posts->skip(1) as $post)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border border-1">
                            <a href="/posts?category={{ $post->category->slug }}" class="link-category">
                                <div class="position-absolute px-3 py-2 text-tag-category" style="border-radius: 10px 0px 0px 0px; background-color: rgba(0, 0, 0, 0.6)">{{ $post->category->name }}</div>
                            </a>

                            <img src="/img/background.jpg" class="card-img-top" style="border-radius: 10px 10px 0px 0px;" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <a href="/posts/{{ $post["slug"] }}" class="link">
                                    <h2 class="judul">{{ $post->title }}</h2>
                                </a>
                                <h5 class="author">By: <a href="/authors/{{ $post->author->username }}" class="link-user">{{ $post->author->name }}</a></h5>
                                <p class="content">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post["slug"] }}" class="link"><h6>Read more..</h6></a>
                            </div>
                            <div class="card-footer">
                                <p class="card-text text-center"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        @else
            <p class="text-center fs-4">No posts found.</p>
        @endif

        <!-- Pagination -->
        <div class="container d-flex px-0 justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
        <!-- Pagination End -->
    </div>
</section>
@endsection