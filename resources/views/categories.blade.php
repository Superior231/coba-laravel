@extends('layouts.main')

@section('contents')
<section class="home pt-4">
    <div class="container">
        <h1 class="mb-4">Post categories</h1>
        @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/categories/{{ $category->slug }}" class="link">
                    <h2 class="judul">{{ $category->name }}</h2>
                </a>
            </li>
        </ul>
        @endforeach
    </div>
</section>
@endsection