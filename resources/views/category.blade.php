@extends('layouts.main')

@section('contents')
<section class="home pt-4">
    <div class="container">
        <h1 class="mb-4">Post category : {{ $category }}</h1>
        @foreach ($posts as $post)
            <article>
                <a href="/posts/{{ $post["slug"] }}">
                    <h2 class="judul">{{ $post->title }}</h2>
                </a>
                <h5 class="author">By: {{ $post->author }}</h5>
                <p class="content">{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
</section>
@endsection