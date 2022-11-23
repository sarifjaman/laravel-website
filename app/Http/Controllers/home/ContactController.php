<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactme()
    {
        return view('frontend.contact_me');
    }

    public function storemessage(Request $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Your message sent successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
