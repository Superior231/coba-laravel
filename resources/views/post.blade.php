@extends('layouts.main')

@section('contents')
    <section class="home pt-4">
        <div class="container">
            <article>
                <h2 class="judul">{{ $post->title }}</h2>
                <h5 class="author">By: {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                <p class="content">{!! $post->body !!}</p>
                {{-- {!!  !!} htmlspecialchar off / false --}}
            </article>

            <a class="btn btn-primary" href="/blog">Back</a>
        </div>
    </section>
@endsection