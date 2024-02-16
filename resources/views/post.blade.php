@extends('layouts.main')

@section('contents')
    <section class="home pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-8">
                    <article>
                        <h2 class="judul">{{ $post->title }}</h2>
                        <h5 class="author">By: <a href="/authors/{{ $post->author->username }}" class="link-user">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="link">{{ $post->category->name }}</a></h5>
        
                        <img src="/img/background.jpg" class="card-img-top" style="border-radius: 10px;" height="200px" alt="{{ $post->category->name }}">
        
                        <p class="content">{!! $post->body !!}</p>
                        {{-- {!!  !!} htmlspecialchar off / false --}}
                    </article>
        
                    <a class="btn btn-primary" href="/blog">Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection