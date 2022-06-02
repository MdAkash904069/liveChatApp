<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.contact');
    }

    public function contact_post(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'etype' => 'required',
            'edesc' => 'required',
        ]);

        $contact = new Contact;
        $contact->name = $request->input('fname').' '.$request->input('lname');
        $contact->email = $request->input('address');
        $contact->etype = $request->input('etype');
        $contact->edesc = $request->input('etype');
        $contact->save();

        return back()->with('success', 'Meassage Send Successfull');
    }
}
