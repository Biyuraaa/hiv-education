@extends('dashboard.template')

@section('content')
<main class="main-container">
    <div class="main-title">
        <h2>Create Blog</h2>
    </div>
    <div class="main-btn mr-3">
        <a href="{{ route('blogs.index') }}" class="btn btn-info">Back</a>
    </div>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-3">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" />
        </div>
        <div class="form-group mt-3">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        
    </form>
</main>
@endsection