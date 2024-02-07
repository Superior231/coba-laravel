@extends('layouts.main')

@section('contents')
    <section class="home pt-4">
        <div class="container">
            <article>
                <h2 class="judul">{{ $post->title }}</h2>
                <h5 class="author">By: {{ $post->author }}</h5>
                <p class="content">{!! $post->body !!}</p>
                {{-- {!!  !!} htmlspecialchar off / false --}}
            </article>

            <a class="btn btn-primary" href="/blog">Back</a>
        </div>
    </section>
@endsection

Post::create([
    'title' => 'Judul ke tiga',
    'slug' => 'judul-ke-tiga',
    'author' => 'Dilarba',
    'excerpt' => 'Lorem ipsum ke tiga.',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem asperiores nulla vel optio harum iste eaque recusandae blanditiis.</p> <p>Dicta, iste! Animi deleniti adipisci ea id est. Maxime cupiditate optio quisquam, ducimus sapiente numquam fuga laudantium dicta quo tenetur velit repellendus error aliquam distinctio minus placeat quam ut dolor illum consequatur rerum nam.</p> <p>Possimus, quis laboriosam. Labore omnis unde tempora velit, nihil illum mollitia ex a dolorem, natus voluptatibus dolores, veritatis laudantium! Harum, ipsa iure? Debitis ex possimus alias accusantium numquam!</p>'
])