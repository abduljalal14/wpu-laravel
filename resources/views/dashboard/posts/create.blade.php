@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1> 
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/posts">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="custom-select" name="category">
              <option selected>Select Category</option>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">Category</label>
            <input id="body" type="hidden" name="body">
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