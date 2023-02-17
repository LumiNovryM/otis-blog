@extends('layouts.main')

@section('container')

    <h2 class="mb-5">Halaman Blog Posts</h2>

    {{-- Foreach Post Start --}}
    @foreach ($posts as $post)
    <article>
        <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
        <p>{{ $post->excerpt }}</p>        
    </article>
    @endforeach
    {{-- Foreach Post End --}}

@endsection
