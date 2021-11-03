<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Applied_job;

class PostController extends Controller
{
    public function job_list(){
        $jobs = Post::all();
        return view('post.job_list')->with('posts', $jobs);
    }

    // public function job_details(){
    //     $job_details = Post::where('Post_id',Session()->get('user'))->first();

    //     return view('seeker.profile')->with('seeker', $seeker);
    // }

    public function job_details(Request $request){
        $job_details = Post::where('Post_id',$request->id)->first();
        return view('post.job_details')->with('job_details', $job_details);
    }


    public function applied_job_list(){
        $job = Applied_job::all();
        return view('post.applied_job_list')->with('jobs', $job);
    }


    public function apply_job(Request $request){
        
        $var = new Applied_job();
       
        $var->Post_ID = $request->Post_ID;
        $var->Job_Title = $request->Job_Title;
        $var->Applied_by = Session()->get('user');
        $var->save();

         return redirect()->route('applied_job_list');
    }

    public function cancel_application(Request $request){
        $var = Applied_job::where('Post_ID',$request->id)->first();
        $var->delete();
        return redirect()->route('applied_job_list');

    }


    
    
    
}
