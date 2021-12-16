@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Post</h1>

@foreach($posts as $post)
<article mb-5>
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post["exceprt"] }}</p>
</article>

@endforeach
@endsection