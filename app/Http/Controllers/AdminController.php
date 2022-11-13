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
}
