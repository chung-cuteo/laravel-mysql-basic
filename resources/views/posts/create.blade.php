<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Create Post</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <h1>Create Post</h1>

  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="post-title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="post-title">
    </div>
    <div class="mb-3">
      <label for="post-content" class="form-label">Content</label>
      <input type="text" name="content" class="form-control" id="post-content">
    </div>
    <div class="mb-3">
      <label for="post-user-id" class="form-label">User ID</label>
      <input type="number" name="user_id" class="form-control" id="post-user-id">
    </div>
    <div class="mb-3">
      <label for="post-file" class="form-label">File</label>
      <input type="file" name="attract" class="form-control" id="post-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>
