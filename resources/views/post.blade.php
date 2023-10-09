
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    
    <P>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</P></a>

    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>
@endsection