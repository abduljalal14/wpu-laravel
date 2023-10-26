@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1> 
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts" class="mb-5">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" autofocus value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" autofocus value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="custom-select" name="category_id">
              @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>    
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>   
              @endif
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">Category</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
  </div>
  <script>
       // membuat slug otomatis
    const titleInput = document.getElementById("title");
    const slugInput = document.getElementById("slug");

    titleInput.addEventListener("change", function (event) {
            const titleValue = titleInput.value;
            const slugValue = titleValue.toLowerCase().replace(/\s+/g, "-");
            slugInput.value = slugValue;
    });
</script>
@endsection