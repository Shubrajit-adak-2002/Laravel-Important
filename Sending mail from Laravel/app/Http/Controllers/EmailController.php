<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    // public function email(){
    //     $tomail = "shubra562@gmail.com";
    //     $moreUser = "papank@gmail.com";
    //     $anotherUser = "babankumar20143@gmail.com";
    //     $subject = "Welcome";
    //     $mailMessage = "Hello Crazy";

    //     // Here we are sending some extra data to mail in an array format
    //     $details = [
    //         'name'=>'Shubrajit',
    //         'price'=>100000,
    //         'product'=>'Iphone'
    //     ];

    //     // Here we are sending a mail
    //     // Mail::to($tomail)->send(new welcomeMail($subject,$mailMessage,$details));

    //     // Here we are sending mail with cc and bcc
    //     Mail::to($tomail)->cc($moreUser)->bcc($anotherUser)->send(new welcomeMail($subject,$mailMessage,$details));
    // }


    public function create()
    {
        return view('contact');
    }

   public function store(Request $request)
{
    // Validate form inputs
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'message' => 'required|string',
        'file'    => 'nullable|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('file')) {
        $fileName = time() . "." . $request->file('file')->extension();
        $request->file('file')->move('uploads', $fileName);
    } else {
        $fileName = null;
    }

    // Send mail
    $toEmail = "shubra562@gmail.com";
    Mail::to($toEmail)->send(new welcomeMail($request->all(), $fileName));

    // Success message
    return back()->with('success', 'Your message has been sent successfully!');
}

}
