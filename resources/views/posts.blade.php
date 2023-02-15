@extends('layouts.main')

@section('container')

    {{-- Foreach Post Start --}}
    @foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{ $post["slug"] }}"><h2>{{ $post["title"] }}</h2></a>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>        
    </article>
    @endforeach
    {{-- Foreach Post End --}}

@endsection
