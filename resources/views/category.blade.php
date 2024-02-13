@extends('layouts.main')

@section('contents')
<section class="home pt-4">
    <div class="container">
        <h1 class="mb-4">Post category : {{ $category }}</h1>
        @foreach ($posts as $post)
            <article class="mb-3 pb-4 border-bottom">
                <a href="/posts/{{ $post["slug"] }}" class="link">
                    <h2 class="judul">{{ $post->title }}</h2>
                </a>
                <h5 class="author">By: <a href="#" class="link-user">{{ $post->user->name }}</a></h5>
                <p class="content">{{ $post->excerpt }}</p>

                <a href="/posts/{{ $post["slug"] }}" class="link"><h6>Read more..</h6></a>
            </article>
        @endforeach
    </div>
</section>
@endsection