@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="200" class="rounded-circle img-thumbnail">
@endsection
