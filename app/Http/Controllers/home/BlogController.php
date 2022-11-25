<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function allblog()
    {
        $allblog = Blog::latest()->get();
        return view('admin.blog.all_blog', compact('allblog'));
    }

    public function addblog()
    {
        $categories = BlogCategory::orderBy('blog_category', 'Asc')->get();
        return view('admin.blog.add_blog', compact('categories'));
    }

    public function storeblog(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|max:255',
            'blog_tags' => 'required|max:255',
        ]);

        $image = $request->file('blog_image');
        $new_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/blog/', $new_image);
        $save_url = "/upload/blog/" . $new_image;

        Blog::insert([
            'blog_title' => $request->blog_title,
            'blog_category_id' => $request->blog_category_id,
            'blog_tags' => $request->blog_tags,
            'blog_image' => $save_url,
            'blog_description' => $request->blog_description,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog added successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog')->with($notification);
    }

    public function editblog($id)
    {
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blog.edit_blog', compact(['blogs', 'categories']));
    }

    public function updateblog(Request $request)
    {
        $blog_id = $request->id;

        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $new_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('upload/blog/', $new_image);
            $save_url = '/upload/blog/' . $new_image;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url
            ]);

            $notification = array(
                'message' => 'Blog updated with image successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('all.blog')->with($notification);
        } else {
            Blog::findOrFail($blog_id)->update([
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_category_id' => $request->blog_category_id,
                'blog_description' => $request->blog_description
            ]);

            $notification = array(
                'message' => 'Blog updated without image successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);
        }
    }

    public function deleteblog($id)
    {
        $blog_id = Blog::findOrFail($id);
        $img = $blog_id->blog_image;
        unlink(public_path($img));

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog deleted successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function blogdetails($id)
    {
        $blogs = Blog::findOrFail($id);
        $recentblog = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('frontend.blog_details', compact(['blogs', 'recentblog', 'categories']));
    }

    public function categoriesblog($id)
    {
        $blogpost = Blog::where('blog_category_id', $id)->orderBy('id', 'DESC')->get();
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $blogpost = Blog::latest()->limit(5)->get();
        return view('frontend.blog_categories', compact(['blogpost', 'categories', 'blogpost']));
    }

    public function ourblog()
    {
        $showblog = Blog::latest()->paginate(2);
        $recentblog = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('frontend.our_blog', compact(['showblog', 'recentblog']));
    }
}
