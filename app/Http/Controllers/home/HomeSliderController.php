<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
// use Intervention\Image\Image;
use Image;
// use Intervention\Image\ImageManagerStatic as Image;

class HomeSliderController extends Controller
{
    public function homeslide()
    {
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeslide'));
    }

    public function updateslider(Request $request)
    {
        $slideid = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $new_image = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Image::make($image)->resize(636, 852)->save('upload/home_slide/' . $new_image);
            $image->move('upload/home_slide/', $new_image);
            $save_url = '/upload/home_slide/' . $new_image;

            HomeSlide::findOrFail($slideid)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url
            ]);

            $notification = array(
                'message' => 'Home slider updated with image successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            HomeSlide::findOrFail($slideid)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url
            ]);

            $notification = array(
                'message' => 'Home slider updated without image successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}
