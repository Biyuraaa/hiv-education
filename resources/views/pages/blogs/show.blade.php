@extends('layouts.template')

@section('content')
<main class="main-container">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-detail">
                    <h2>{{ $blog->title }}</h2>
                    <p class="text-muted">by <strong>{{ $blog->user->name }}</strong> on {{ $blog->created_at->format('F j, Y') }}</p>
                    @if ($blog->image)
                    <img src="{{ asset('assets/images/' . $blog->image) }}" alt="blog" class="img-fluid mb-4" />
                    @else
                    <img src="{{ asset('assets/images/HIVV.jpg') }}" alt="blog" class="img-fluid mb-4" />
                    @endif
                    <p>{{ $blog->content }}</p>
                </div>

                <div class="comments-section mt-5">
                    <h3>Comments</h3>
                    @foreach ($blog->comments as $comment)
                    <div class="comment my-3 p-3 border rounded">
                        <p><strong>{{ $comment->user->name }}</strong> on {{ $comment->created_at->format('F j, Y') }}</p>
                        <p>{{ $comment->content }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="comment-form mt-5">
                    <h3>Leave a Comment</h3>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group mt-3">
                            <label for="content">Comment</label>
                            <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Post Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .blog-detail h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .blog-detail p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .comments-section h3,
    .comment-form h3 {
        margin-bottom: 1.5rem;
    }

    .comment p {
        margin: 0;
    }

    .comment p:first-of-type {
        margin-bottom: 0.5rem;
        color: #555;
    }

    .comment-form textarea {
        resize: vertical;
    }
</style>
@endsection
