@extends('layouts.main')


@section('container')

    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h3>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h3>

        <P>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</P></a>
       
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>
    @endforeach

    
@endsection