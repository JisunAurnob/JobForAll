<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seeker;

class SeekerController extends Controller
{
    public function dashboard(){
        return view('seeker.dashboard');
    }

    //sign up!!!
    public function signup(){
        return view('seeker.signup');
    }
    

    public function signupS(Request $request){
        $this->validate($request,
 
        [
            'name'=>'required|min:4|max:15',
            'username'=>'required|min:4|max:10|unique:App\Models\Seeker,Username',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'gender'=>'required',
            'dob'=>'required',
            'nid'=>'required|digits:10',
            'password'=>'required|min:5|max:15|confirmed',
            'password_confirmation'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 4 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'username.required'=>'Userame is requried!',
            'username.min'=>'Userame must be more than 3 characters!',
            'username.max'=>'Userame must be less than 11 characters!',
            'phone.required'=>'Phone number is requried!',
            'phone.digits'=>'The number is less or more than 11 digits, please enter valid phone number!',
            'email.required'=>'Email is required!',
            'dob.required'=>'Date of birth is required!',
            'nid.required'=>'NID is required!',
            'nid.digits'=>'The number is less or more than 10 digits, please enter valid phone number!',
            'email.email'=>'Please enter valid email address!',
            'gender.required'=>'Gender is requried!',
            'password.required'=>'Password is required!',
            'password.min'=>'Password must be more than 4 characters!',
            'password.max'=>'Password must be less than 16 characters!',
            'password_confirmation.required'=>'This field is required!'
        ]
        );

        $var = new Seeker();
        $var->Name = $request->name;
        $var->Username = $request->username;
        $var->Email = $request->email;
        $var->Phone = $request->phone;
        $var->Gender = $request->gender;
        $var->Dob = $request->dob;
        $var->NID = $request->nid;
        $var->Picture = '/images/empty.jpg';
        $var->Password= $request->password_confirmation;
        $var->save();

        // return 'Registration Successful!';
        return redirect()->route('login');
    }

    // seeker dashboard / profile / edit!!!

    public function seeker_dash(){
        return view('seeker.seekerdash');
    }

    public function profile(){
        $seeker = Seeker::where('username',Session()->get('user'))->first();
        return view('seeker.profile')->with('seeker', $seeker);
    }

    public function edit_profile(Request $request){
        $username = $request->username;
        $seeker = Seeker::where('Username',$username)->first();
        return view('seeker.edit_profile')->with('seeker', $seeker);
    }

    public function edit_profileS(Request $request){
        $this->validate($request,

        [
            'name'=>'required|min:4|max:15',
            'username'=>'required|min:4|max:10',
            'email'=>'required|email',
            'phone'=>'required|digits:11',
            'gender'=>'required',
            'dob'=>'required',
            'nid'=>'required|digits:10'
            // 'password'=>'required|min:5|max:15|confirmed',
            // 'password_confirmation'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 4 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'username.required'=>'Userame is requried!',
            'username.min'=>'Userame must be more than 3 characters!',
            'username.max'=>'Userame must be less than 11 characters!',
            'phone.required'=>'Phone number is requried!',
            'phone.digits'=>'The number is less or more than 11 digits, please enter valid phone number!',
            'email.required'=>'Email is required!',
            'dob.required'=>'Date of birth is required!',
            'nid.required'=>'NID is required!',
            'nid.digits'=>'The number is less or more than 10 digits, please enter valid phone number!',
            'email.email'=>'Please enter valid email address!',
            'gender.required'=>'Gender is requried!'
            // 'password.required'=>'Password is required!',
            // 'password.min'=>'Password must be more than 4 characters!',
            // 'password.max'=>'Password must be less than 16 characters!',
            // 'password_confirmation.required'=>'This field is required!'
        ]
        );
 
        

        $var = Seeker::where('Username',$request->username)->first();
        $var->Name = $request->name;
        $var->Username = $request->username;
        $var->Email = $request->email;
        $var->Phone = $request->phone;
        $var->Gender = $request->gender;
        $var->Dob = $request->dob;
        $var->NID = $request->nid;
        $var->Picture = '';
        // $var->Password= $request->password_confirmation;
        $var->save();

         return redirect()->route('profile');
    }


    public function change_picture(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $var = Seeker::where('Username',Session()->get('user'))->first();
        $var->Picture= substr($path, 6, 3000);
        $var->save();
 
        return redirect()->route('profile');
    }

    


   
}
