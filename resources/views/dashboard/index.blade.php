@extends('dashboard.template')

@section('content')
<main class="main-container">
    <div class="main-title">
        <h2>Home</h2>
    </div>

    <div class="main-cards">
        <div class="card">
            <div class="card-inner">
                <h2>USERS</h2>
                <span class="material-icons-outlined">groups</span>
            </div>
            <h1>{{ $users->count() }}</h1>
        </div>

        <div class="card">
            <div class="card-inner">
                <h2>BLOGS</h2>
                <span class="material-icons-outlined">subscriptions</span>
            </div>
            <h1>{{ $blogs->count() }}</h1>
        </div>

        <div class="card">
            <div class="card-inner">
                <h2>COMMENTS</h2>
                <span class="material-icons-outlined">forum</span>
            </div>
            <h1>{{ $comments->count() }}</h1>
        </div>
    </div>

    <div class="products">
        <div class="product-card">
            <h2 class="product-description">Latest Updates</h2>
            <div class="blog-list">
                @foreach ($recentBlogs as $blog)
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
        </div>

        <div class="social-media">
            <div class="product">
                <div>
                    <div class="product-icon background-red">
                        <i class="bi bi-twitter"></i>
                    </div>
                    <h1 class="text-red">+274</h1>
                    <p class="text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div>
                    <div class="product-icon background-green">
                        <i class="bi bi-instagram"></i>
                    </div>
                    <h1 class="text-green">+352</h1>
                    <p class="text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div>
                    <div class="product-icon background-orange">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <h1 class="text-orange">-126</h1>
                    <p class="text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>

                <div>
                    <div class="product-icon background-blue">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <h1 class="text-blue">+102</h1>
                    <p class="text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .main-cards {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .card {
        flex: 1;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1rem;
        text-align: center;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .products {
        display: flex;
        gap: 2rem;
    }

    .product-card, .social-media {
        flex: 1;
    }

    .product {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .product-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-bottom: 0.5rem;
        color: #fff;
    }

    .background-red { background-color: red; }
    .background-green { background-color: green; }
    .background-orange { background-color: orange; }
    .background-blue { background-color: blue; }

    .text-red { color: red; }
    .text-green { color: green; }
    .text-orange { color: orange; }
    .text-blue { color: blue; }

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
