<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function validateContact(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:30',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'message'=>'required|min:5|max:150'
            ],
            [
                'name.required'=>'Name is needed',
                'name.min'=>'Name should be more than 5 charcters'
            ]
            );
            $var = new Contact();
            $var->Name= $request->name;
            $var->Email = $request->email;
            $var->Phone = $request->phone;
            $var->Message = $request->message;
            $var->save();
            return redirect()->route('home');      
    }
}
