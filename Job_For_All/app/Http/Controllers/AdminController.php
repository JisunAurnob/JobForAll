<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use App\Models\Seeker;

use App\Models\Post;

use App\Models\Corp_emp;

use App\Models\F_emp;

use App\Models\Contact;

class AdminController extends Controller
{
    public function dashboard(){
        $seekers = array();
        $seekers = Seeker::all();
        $posts = array();
        $posts = Post::all();
        $cemps = array();
        $cemps = Corp_emp::all();
        $femps = array();
        $femps = F_emp::all();
        $latestPost = Post::orderBy('created_at', 'desc')->get()->first();
        return view('admin.dashboard')->with('posts',$posts)
        ->with('seekers',$seekers)
        ->with('lastpost',$latestPost)
        ->with('cemps',$cemps)
        ->with('femps',$femps);
    }
    public function adminProfile(){
        $admin = Admin::where('Admin_id',Session()->get('adminId'))->first();
        return view('admin.adminProfile')->with('admin',$admin);
    }
    public function changeAdminProPic(Request $request)
    {
         
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
 
        ]);

        $path = $request->file('image')->store('public/images');
 
 
        $var = Admin::where('Admin_id',Session()->get('adminId'))->first();
        $var->Picture= substr($path, 6, 3000);
        $var->save();
 
        return redirect()->route('adminProfile');
 
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
        return redirect()->route('adminProfile');
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
    public function showAllPost(){
        $posts = array();
        $posts = Post::all();
        return view('admin.managePosts')->with('posts',$posts);
    }
    public function editPost(Request $request){
        $id = $request->id;
        $post = Post::where('Post_id',$id)->first();
        return view('admin.editPost')->with('post', $post);
    }
    public function editPostSubmit(Request $request){
        $this->validate(
            $request,
            [
                'Post_Title'=>'required|min:4|max:150',
                'Post_Description'=>'required|min:100|max:3000',
                'Job_Requirement'=>'required|min:100|max:3000',
                'Salary'=>'required|min:1|max:50',
                'Vacancy'=>'required|min:1|max:50',
                'Workplace'=>'required|min:1|max:50',
                'Compensation'=>'required|min:1|max:2000',
                'Deadline'=>'required',
                'Job_Location'=>'required|min:1|max:200'
            ],
            [
                'Post_Title.required'=>'The Job Post Should Have A Title',
                'Post_Title.min'=>'Title should be more than 4 charecters'
            ]
            );

        $var = Post::where('Post_id',$request->id)->first();
        $var->Post_Title= $request->Post_Title;
        $var->Post_Description = $request->Post_Description;
        $var->Job_Requirement = $request->Job_Requirement;
        $var->Salary = $request->Salary;
        $var->Vacancy = $request->Vacancy;
        $var->Workplace = $request->Workplace;
        $var->Compensation = $request->Compensation;
        $var->Deadline = $request->Deadline;
        $var->Employment_Status = $request->Employment_Status;
        $var->Post_Status = $request->Post_Status;
        $var->Job_Location = $request->Job_Location;
        $var->save();
        return redirect()->route('showAllPost');
    }
    public function deletePost(Request $request){
        $var = Post::where('Post_id',$request->id)->first();
        $var->delete();
        return redirect()->route('showAllPost');
    }
    public function queryList(){
        $contacts = array();
        $contacts = Contact::all();
        return view('admin.manageQueries')->with('contacts',$contacts);
    }
    public function deleteQuery(Request $request){
        $var = Contact::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('queryLists');
    }
    public function corporateList(){
        $corporates = array();
        $corporates = Corp_emp::all();
        return view('admin.manageCorporates')->with('corporates',$corporates);
    }
    public function deleteCorporates(Request $request){
        $var = Corp_emp::where('Corporate_id',$request->id)->first();
        $var->delete();
        return redirect()->route('corporateList');
    }
    public function freempList(){
        $femps = array();
        $femps = F_emp::all();
        return view('admin.manageFreelanceEmps')->with('femps',$femps);
    }
    public function deletefreemp(Request $request){
        $var = F_emp::where('Freelance_id ',$request->id)->first();
        $var->delete();
        return redirect()->route('freempList');
    }
}
