<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h3 class="mb-4">Edit Post</h3>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Form -->
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            @method('PUT')

            <!-- Post Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" id="title"
                       class="form-control"
                       value="{{ old('title', $post->post_title) }}" >
            </div>

            <!-- Post Description -->
            <div class="mb-3">
                <label for="post_desc" class="form-label">Post Description</label>
                <textarea name="post_desc" id="post_desc" rows="4"
                          class="form-control" required>{{ old('post_desc', $post->post_desc) }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success">Update Post</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
