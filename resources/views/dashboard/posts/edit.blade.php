@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1> 
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" autofocus value="{{ old('title', $post->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" autofocus value="{{ old('slug', $post->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
          <label for="image">Post Image</label>
          <input type="hidden" name="oldImage" value="{{ $post->image }}">
          @if ($post->image)
          <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mb-3 col-sm-5 d-block" id="img-preview">
          @else
          <img class="img-fluid mb-3 col-sm-5 d-block" id="img-preview">
          @endif
          <input onchange="previewImage(event)" type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="custom-select" name="category_id">
              @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id)
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
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
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

    const imgInp = document.getElementById("image");
    const blah = document.getElementById("img-preview");

    imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file)
    }

  };
</script>
@endsection