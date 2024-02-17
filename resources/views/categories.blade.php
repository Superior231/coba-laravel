@extends('layouts.main')

@section('contents')
<section class="home py-4">
    <div class="container">
        <h1 class="mb-4">Categories</h1>

        <div class="container px-0">
            <div class="row g-3">
                @foreach ($categories as $category)
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light text-white">
                        <a href="/posts?category={{ $category->slug }}" class="link">
                            <img src="/img/background.jpg" class="card-img" alt="{{ $category->name }}" style="border-radius: 10px;">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.4); border-radius: 10px;">
                                <h5 class="card-title text-light">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</section>
@endsection