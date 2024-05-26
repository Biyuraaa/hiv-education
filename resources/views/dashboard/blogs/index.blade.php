@extends('dashboard.template')

@section('content')
<main class="main-container">
    <div class="main-title">
        <h2>All Blogs</h2>
    </div>
    <div class="main-btn">
        <a href="{{route('blogs.create')}}" class="btn btn-primary">Add Blog</a>
    </div>
    <div class="blog-list mt-4">
        @foreach ($blogs as $blog)
        <a href="{{ route('blogs.show', $blog->id) }}" class="blog-card">
            <div class="blog-image">
                @if ($blog->image)
                <img src="{{ asset('assets/images/' . $blog->image) }}" alt="blog" />
                @else
                <img src="{{ asset('assets/images/HIVV.jpg') }}" alt="blog" />
                @endif
            </div>
            <div class="blog-content">
                <h2>{{ $blog->title }}</h2>
                <p>{{ Str::limit($blog->content, 100) }}</p>
            </div>
        </a>
        @endforeach
    </div>
</main>

<style>
    .blog-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .blog-card {
        display: flex;
        text-decoration: none;
        color: inherit;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .blog-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .blog-image {
        flex: 0 0 150px;
        height: 100px;
        overflow: hidden;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog-content {
        padding: 10px;
        flex: 1;
    }

    .blog-content h2 {
        margin: 0 0 10px;
        font-size: 1.5rem;
    }

    .blog-content p {
        margin: 0;
        color: #555;
    }
</style>
@endsection
