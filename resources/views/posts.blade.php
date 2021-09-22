{{-- @dd --> untuk melihat isi dari varibel, array / pengganti vardump() --}}
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    {{-- looping isi dari array--}}
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
@endsection


