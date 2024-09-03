<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\Comment_info;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addblog()
    {
        return view("blog.add");
    }

    public function index($id)
    {
        $blog = Blog::findOrFail($id);

        // Check if the user has already viewed this blog post
        if (!session()->has('viewed_blog_' . $id)) {
            // Increment view count only if it's a unique view
            $blog->increment('views');

            // Store the view in the session
            session()->put('viewed_blog_' . $id, true);
        }

        return view('blog.index', compact('blog'));
    }
    // function to create/store blog 
    public function createblog(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'content' => 'required',
            'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);

        $imageName = time() . '.' . $request->blog_img->extension();
        $request->blog_img->move(public_path('images'), $imageName);

        Blog::create([
            'blog_title' => $request->blog_title,
            'content' => $request->content,
            'blog_img' => $imageName,
        ]);

        return redirect()->route('/')->with('success', 'Blog created successfully.');
    }

    public function store_comment(Request $request)
    {
        // Validate the request
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'user_id' => 'required|exists:users,id', // Assuming you have a users table
            'user_name' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
        ]);

        // Create a new comment
        Comment_info::create([
            'blog_id' => $request->input('blog_id'),
            'user_id' => $request->input('user_id'),
            'user_name' => $request->input('user_name'),
            'comment' => $request->input('content'),
        ]);

        // Redirect back to the blog post with a success message
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
