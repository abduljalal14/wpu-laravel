@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive col-lg-9">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-light"><span data-feather="eye"></span></a>
          <a href="" class="badge bg-warning text-light"><span data-feather="edit"></span></a>
          <a href="" class="badge bg-danger text-light"><span data-feather="x-circle"></span></a>
        </td>
      </tr>         
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
