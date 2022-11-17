<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function aboutpage()
    {
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutpage'));
    }

    public function updateabout(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $new_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Image::make($image)->resize(636, 852)->save('upload/about_image/' . $new_image);
            $image->move('upload/about_image/', $new_image);
            $save_image = '/upload/about_image/' . $new_image;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_image
            ]);

            $notification = array(
                'message' => 'About page updated with image successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description
            ]);

            $notification = array(
                'message' => 'About page updated without image successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }

    public function homeabout()
    {
        $aboutpage = About::find(1);
        return view('frontend.about_page', compact('aboutpage'));
    }

    public function aboutmulti()
    {
        return view('admin.about_page.about_multi_image');
    }

    public function storemultiimage(Request $request)
    {
        $image = $request->file('multi_image');

        foreach ($image as $multi_image) {
            $new_image = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();
            $multi_image->move('upload/multi/', $new_image);
            $save_url = '/upload/multi/' . $new_image;

            MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = array(
            'message' => 'Multi image inserted successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function allmultiimage()
    {
        $allmultiimage = MultiImage::all();
        return view('admin.about_page.all_multi_image', compact('allmultiimage'));
    }

    public function editmultiimage($id)
    {
        $editmultiimage = MultiImage::findOrFail($id);

        return view('admin.about_page.edit_multi_image', compact('editmultiimage'));
    }

    public function updatemultiimage(Request $request)
    {
        $multi_image_id = $request->id;

        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $new_image = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            $image->move('upload/multi/', $new_image);
            $save_url = '/upload/multi/' . $new_image;

            MultiImage::findOrFail($multi_image_id)->update([
                'multi_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'multi image updated successfully!',
                'alert_image' => 'success'
            );

            return redirect()->route('all.multi.image')->with($notification);
        }
    }

    public function deletemultiimage($id)
    {
        $multi = MultiImage::findOrFail($id);
        $img = $multi->multi_image;
        unlink(public_path($img));

        MultiImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Multi image deleted successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
