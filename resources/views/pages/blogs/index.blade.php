@extends('layouts.template')
@section('content')
<div class="container-fluid bg-primary py-5 mb-5" style="background-image: url('{{ asset("assets/images/HIVV.jpg") }}'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Blog</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <!-- Breadcrumb items can be added here if needed -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row">
        @foreach ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <a href="{{ route('blog.show', $blog->id) }}" class="blog-card">
                <div class="blog-image">
                    @if ($blog->image)
                    <img src="{{ asset('assets/images/' . $blog->image) }}" alt="blog" class="img-fluid rounded" />
                    @else
                    <img src="{{ asset('assets/images/HIVV.jpg') }}" alt="blog" class="img-fluid rounded" />
                    @endif
                </div>
                <div class="blog-content p-3">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ Str::limit($blog->content, 100) }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- Blog End -->

<style>
    .blog-card {
        text-decoration: none;
        color: inherit;
        transition: transform 0.2s;
    }

    .blog-card:hover {
        transform: scale(1.05);
    }

    .blog-image {
        height: 200px;
        overflow: hidden;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog-content {
        background: #fff;
        border: 1px solid #ddd;
        border-top: none;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .blog-content h3 {
        margin: 0 0 10px;
        font-size: 1.25rem;
    }

    .blog-content p {
        margin: 0;
        color: #555;
    }
</style>
@endsection
