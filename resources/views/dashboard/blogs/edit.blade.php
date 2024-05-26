@extends('dashboard.template')

@section('content')
<main class="main-container">
    <div class="main-title">
        <h2>Edit Blog</h2>
    </div>
    <div class="main-btn mr-3">
        <a href="{{ route('blogs.index') }}" class="btn btn-info">Back</a>
    </div>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $blog->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}" />
        </div>
        <div class="form-group mt-3">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5">{{ $blog->content }}</textarea>
        </div>
        <div class="form-group my-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
            @if ($blog->image)
                <div class="mt-3">
                    <img src="{{ asset('assets/images/' . $blog->image) }}" alt="Current image" width="200" />
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
@endsection
