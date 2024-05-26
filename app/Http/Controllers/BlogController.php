<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.blogs.index', ['blogs' => Blog::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'admin')->get();
        $categories = Category::all();
        return view('dashboard.blogs.create', ['users' => $users, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = Str::slug($request->title) . '.' . $image->extension();
            $image->move(public_path('assets/images'), $image_name);
            $validatedData['image'] = $image_name;
        }

        Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $comments = $blog->comments()->get();
        return view('dashboard.blogs.show', ['blog' => $blog, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $users = User::where('role', 'admin')->get();
        $categories = Category::all();
        return view('dashboard.blogs.edit', ['blog' => $blog, 'users' => $users, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image) {
                $oldImagePath = public_path('assets/images/' . $blog->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Upload new image
            $image = $request->file('image');
            $image_name = Str::slug($request->title) . '.' . $image->extension();
            $image->move(public_path('assets/images'), $image_name);
            $validatedData['image'] = $image_name;
        }

        $blog->update($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete image
        if ($blog->image) {
            $imagePath = public_path('assets/images/' . $blog->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Delete comments
        $blog->comments()->delete();

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
