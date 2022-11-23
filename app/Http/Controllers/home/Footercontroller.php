<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class Footercontroller extends Controller
{
    public function allfooter()
    {
        $allfooter = Footer::find(1);
        return view('admin.footer.allfooter', compact('allfooter'));
    }

    public function updatefooter(Request $request)
    {
        $id = $request->id;

        Footer::findOrFail($id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'copyright' => $request->copyright
        ]);

        $notification = array(
            'message' => 'Footer updated successfully!',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
