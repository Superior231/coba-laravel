@extends('layouts.main')

@section('contents')
    <section class="home pt-4">
        <div class="container">
            <article>
                <h2 class="judul">{{ $post["title"] }}</h2>
                <h5 class="author">By: {{ $post["author"] }}</h5>
                <p class="content">{{ $post["body"] }}</p>
            </article>

            <a class="btn btn-primary" href="/blog">Back</a>
        </div>
    </section>
@endsection