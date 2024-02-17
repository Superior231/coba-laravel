@extends('layouts.main')

@section('contents')
    <section class="home pt-4">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb-container" id="breadcrumb-container">
                <ol class="breadcrumb">
                    <a href="/posts" class="breadcrumb-items">Blog</a>
                    <a href="" class="breadcrumb-items active">Author</a>
                </ol>
            </div>
            <!-- Breadcrumb End -->

            <!-- judul -->
            <div class="container px-0">
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <h3 class="mb-4">{{ $title }}</h3>
                    </div>
                    <div class="col-md-4 col-lg-4">

                        <!-- Search -->
                        <form action="/authors/{{ $username }}" method="GET" class="d-flex justify-content-end">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                                {{-- @elseif (request('author'))  
                                    <input type="hidden" name="author" value="{{ request('author') }}">  --}}
                            @endif
                            <div class="container-search w-100" id="container-search">
                                <input type="search" name="search" id="search" placeholder="Search here..." value="{{ request('search') }}" autocomplete="off">
                                <button type="submit" class="btn-search">
                                    <i class='bx bx-search'></i>
                                </button>
                            </div>
                        </form>
                        <!-- Search End -->

                    </div>
                </div>
            </div>
            <!-- judul end -->

            <div class="row row-cols-1 position-relative ">
                <div class="col col-lg-4 position-sticky-top">
                    <div class="card">
                        <div class="card-body">
                            <div class="gambar d-flex align-items-center justify-content-center mt-2">
                                <img src="/img/foto_profile.jpg" alt="" width="50%" style="border-radius: 50%">
                            </div>
                            <table class="table table-borderless mt-4">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $author }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-8 mt-3 mt-lg-0">
                    <div class="card">
                        <div class="card-body px-4">
                            <article>
                                @foreach ($posts as $post)
                                <article class="mb-3 pb-4 border-bottom">
                                    <a href="/posts/{{ $post["slug"] }}" class="link">
                                        <h2 class="judul">{{ $post->title }}</h2>
                                    </a>
                                    <h5 class="author">By: <a href="#" class="link-user">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="link">{{ $post->category->name }}</a></h5>
                                    <p class="content">{{ $post->excerpt }}</p>
                    
                                    <a href="/posts/{{ $post["slug"] }}" class="link"><h6>Read more..</h6></a>
                                </article>
                                @endforeach
                            </article>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection