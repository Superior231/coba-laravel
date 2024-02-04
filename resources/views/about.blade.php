@extends('layouts.main')

@section('contents')
<section class="home pt-4">
    <div class="container">
        <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="{{ $image }}" alt="" width="200px" class="img-thumbnail rounded-circle">
    </div>
</section>
@endsection