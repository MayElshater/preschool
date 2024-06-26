<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Models\ContactUS;
use Mail;

class ContactUsController extends Controller
{
    public function contactUS()
    {
        return view('emails.contactUs');
    }

    public function contactUSPost(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:50',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Prepare data to be sent to the email view
        /*
        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ];*/

        // Send email using the Mailable class
        Mail::to('your-email@example.com')->send(new contact($data));
        ContactUS::create($data);

        // Optionally, you can return a response indicating success
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    

}
