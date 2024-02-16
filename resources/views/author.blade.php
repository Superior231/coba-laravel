@extends('layouts.main')

@section('contents')
    <section class="home pt-4">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb-container" id="breadcrumb-container">
                <ol class="breadcrumb">
                    <a href="/blog" class="breadcrumb-items">Blog</a>
                    <a href="" class="breadcrumb-items active">Author</a>
                </ol>
            </div>
            <!-- Breadcrumb End -->

            <!-- judul -->
            <h3 class="mb-4">{{ $title }}</h3>
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
                                    <h5 class="author">By: <a href="#" class="link-user">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="link">{{ $post->category->name }}</a></h5>
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