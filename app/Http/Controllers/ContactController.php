<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact.index');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $mail = new ContactUsMailable($request->all());

        Mail::to('imov.games@gmail.com')->send($mail);

        return redirect()->route('contact.index')->with('info', 'The message has been sent successfully');
    }
}
