<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use App\Models\Seeker;

class AdminController extends Controller
{
    public function dashboard(){
        $admin = Admin::where('Admin_id',Session()->get('adminId'))->first();
        return view('admin.dashboard')->with('admin',$admin);
    }
    public function editAdminInfo(){
        $admin = Admin::where('Admin_id',Session()->get('adminId'))->first();
        return view('admin.editAdminProfile')->with('user',$admin);
    }
    public function adminInfoUpdate(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:4|max:50',
                'email'=>'email',
                'username'=>'required|min:5|max:20',
                'dob'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'gender'=>'required'
            ],
            [
                'name.required'=>'Name is needed',
                'name.min'=>'Name should be more than 4 charecters'
            ]
            );

        $var = Admin::where('Admin_id',Session()->get('adminId'))->first();
        $var->Name= $request->name;
        $var->Email = $request->email;
        $var->Phone = $request->phone;
        $var->Username = $request->username;
        $var->Dob = $request->dob;
        $var->Gender = $request->gender;
        $var->save();
        return redirect()->route('dashboardAdmin');
    }
    public function seekersList(){
        $seekers = array();
        $seekers = Seeker::all();
        return view('admin.manageSeekers')->with('seekers',$seekers);
    }
    public function deleteSeeker(Request $request){
        $var = Seeker::where('Seeker_id',$request->id)->first();
        $var->delete();
        return redirect()->route('seekersList');
    }
    public function editSeeker(Request $request){
        $id = $request->id;
        $seeker = Seeker::where('Seeker_id',$id)->first();
        return view('admin.editSeekerProfile')->with('seeker', $seeker);
    }
    public function editSeekerSubmit(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:4|max:50',
                'email'=>'email',
                'username'=>'required|min:5|max:20',
                'dob'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'gender'=>'required'
            ],
            [
                'name.required'=>'Name is needed',
                'name.min'=>'Name should be more than 4 charecters'
            ]
            );

        $var = Seeker::where('Seeker_id',$request->id)->first();
        $var->Name= $request->name;
        $var->Email = $request->email;
        $var->Phone = $request->phone;
        $var->Username = $request->username;
        $var->Dob = $request->dob;
        $var->Gender = $request->gender;
        $var->NID = $request->nid;
        $var->save();
        return redirect()->route('seekersList');
    }
}
