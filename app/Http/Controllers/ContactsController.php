<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create(){
    	  return view('contactus');
    }
    public function store(Request $request){
    	  $request->validate([
             'fullname' => 'required',
             'email' => 'required|email',
             'message' => 'required',
    	  ]);
    	  $form_data = array(
            'fullname' =>$request->fullname,
            'email' => $request->email,
            'message' => $request->message,
    	  );
    	  Contact::create($form_data);
    	  return redirect('contactus')->with('message','Message Sent Successfully');
    }
}
