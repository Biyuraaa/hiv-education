@extends('dashboard.template')

@section('content')
<main class="main-container">
    <div class="main-title">
        <h2>Show Blog</h2>
    </div>
    <div class="d-flex justify-content-start">
      <div class="main-btn mr-3">
          <a href="{{ route('blogs.index') }}" class="btn btn-info">Back</a>
      </div>
      <div class="main-btn mr-3">
          <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
      </div>
      <div class="main-btn">
        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>

    <div class="blog-detail mt-4">
        <div class="blog-header">
            <h2>{{ $blog->title }}</h2>
            <p>by <strong>{{ $blog->user->name }}</strong> on {{ $blog->created_at->format('F j, Y') }}</p>
        </div>
        <div class="blog-content">
            @if ($blog->image)
            <img src="{{ asset('assets/images/' . $blog->image) }}" alt="blog" />
            @else
            <img src="{{ asset('assets/images/HIVV.jpg') }}" alt="blog" />
            @endif
            <p>{{ $blog->content }}</p>
        </div>
    </div>

    <div class="comments-section">
        <h3>Comments</h3>
        @foreach ($blog->comments as $comment)
        <div class="comment">
            <p><strong>{{ $comment->user->name }}</strong> on {{ $comment->created_at->format('F j, Y') }}</p>
            <p>{{ $comment->content }}</p>
        </div>
        @endforeach
    </div>
</main>

<style>
    .blog-detail {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 2rem;
    }

    .blog-header {
        margin-bottom: 1rem;
    }

    .blog-header h2 {
        margin: 0;
        font-size: 2rem;
    }

    .blog-header p {
        margin: 0;
        color: #555;
    }

    .blog-content {
        margin-top: 1rem;
    }

    .blog-content img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 1rem;
    }

    .comments-section {
        border-top: 1px solid #ddd;
        padding-top: 1rem;
    }

    .comments-section h3 {
        margin-bottom: 1rem;
    }

    .comment {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    .comment p {
        margin: 0;
    }

    .comment p:first-of-type {
        margin-bottom: 0.5rem;
        color: #555;
    }
</style>
@endsection
