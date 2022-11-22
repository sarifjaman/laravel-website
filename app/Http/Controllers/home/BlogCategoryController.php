<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function allblogcategory()
    {
        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.all_blog_category', compact('blogcategory'));
    }

    public function addblogcategory()
    {
        return view('admin.blog_category.add_blog_category');
    }

    public function storeblogcategory(Request $request)
    {
        $request->validate([
            'blog_category' => 'required|max:255'
        ]);

        $storeblogcategory = BlogCategory::insert([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog category added successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function editblogcategory($id)
    {
        $editblogcategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.edit_blog_category', compact('editblogcategory'));
    }

    public function updateblogcategory(Request $request)
    {
        $updateblogcategory = $request->id;

        BlogCategory::findOrFail($updateblogcategory)->update([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog category updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function deleteblogcategory($id)
    {
        $deleteblogcategory = BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog category deleted successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }
}
