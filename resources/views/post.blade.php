
@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <P>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</P></a>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            

    <a href="/posts">Back to Posts</a>
        </div>
    </div>
</div>
    
@endsection