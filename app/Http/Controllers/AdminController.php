<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //Logout
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //Profile
    public function profile()
    {
        $id = Auth::user()->id;
        $admininfo = User::find($id);
        return view('admin.admin_profile_view', compact('admininfo'));
    }

    public function editprofile()
    {
        $id = Auth::user()->id;
        $admininfoedit = User::find($id);
        return view('admin.admin_profile_edit', compact('admininfoedit'));
    }

    public function storeprofile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;

        if ($request->has('profile_image')) {
            $file = $request->profile_image;
            $image_new_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload/admin_images/', $image_new_name);
            $data->profile_image = '/upload/admin_images/' . $image_new_name;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }
}
